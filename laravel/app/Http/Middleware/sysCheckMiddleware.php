<?php namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;

class sysCheckMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$agent = new Agent();
		$sys_check = false;
		$msg = [];
		
		/*if(!$agent->isMobile() || !$agent->isTablet()){
		}*/
		
		if($agent->isDesktop()){ /*check for browser version to support webcam (Chrome, IE, Firefox, Opera, Safari)*/
			
			$browser = $agent->browser();
			$browserversion = $agent->version($browser);
			
			if(($browser=='Chrome')&&($browserversion>=37)){ /*21*/
				$sys_check = true;
			}
			elseif(($browser=='Firefox')&&($browserversion>=33)){ /*17*/
				$sys_check = true;
			}
			elseif(($browser=='Opera')&&($browserversion>=24)){ /*18*/
				$sys_check = true;
			}
			elseif(($browser=='Edge')&&($browserversion>=12)){
				$sys_check = true;
			}
			else{
				$msg = ['Browser not supported'];
			}
			
		} else{
			$msg = ['Please don\'t use mobile devices.'];
		}
		
		if($sys_check == false){
			$data = ['msg' => $msg];
			return view('desktop.syserror')->with($data);
		}
		
		return $next($request);
	}

}
