<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="<?php echo(csrf_token()); ?>" />
		
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/normalize.min.css">
        <link rel="stylesheet" href="/css/main070816.css">

        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Lato:400,300italic' rel='stylesheet' type='text/css'>
	<style>
		#option-1-caption>p, #option-2-caption>p, #option-3-caption>p, #option-4-caption>p{
			margin:0
		}

		@keyframes blink {
		to { color: red; }
		}
		.timerHighlight{
			animation: blink 1s steps(2, start) infinite;
		}
		.c-option__caption {
			width: 85%;
		}
	</style>
    </head>
    <body class="page-question">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <section class="o-info-panel">

                <div class="o-info-panel__question-info">
                    <span id="section" class="question-info__section"></span>
                    <span> > </span>
                    <span class="question-info__q-no">Q <span id="question-no"></span></span>
                </div>				
				
                <div class="o-info-panel__time-box c-stats">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 497.25 497.25" height="40px" class="c-button__icon" fill="#999"><path d="M258.188 250.537v-107.1c0-5.737-3.825-9.562-9.562-9.562s-9.562 3.825-9.562 9.562v107.1c-11.475 3.825-19.125 15.3-19.125 26.775s7.65 22.95 19.124 26.775v30.6c0 5.737 3.825 9.562 9.562 9.562s9.562-3.826 9.562-9.563v-30.6c11.475-3.825 19.125-15.3 19.125-26.775s-7.65-22.95-19.125-26.775zm-9.563 36.338c-5.737 0-9.562-3.825-9.562-9.562s3.825-9.562 9.562-9.562 9.562 3.826 9.562 9.563-3.825 9.562-9.562 9.562z"/><path d="M411.188 128.138l22.95-22.95 13.388 13.388 13.387-13.388-40.163-40.163-13.388 13.388L420.75 91.8l-22.95 22.95c-36.337-34.425-86.062-55.462-139.612-57.375v-38.25h19.125V0h-57.375v19.125h19.125v38.25C122.4 63.112 28.688 158.737 28.688 277.312c0 122.4 97.538 219.938 219.938 219.938 122.4 0 219.938-97.537 219.938-219.938-.002-57.374-21.04-109.012-57.376-149.174zM248.625 478.125c-110.925 0-200.812-89.888-200.812-200.812S137.7 76.5 248.625 76.5s200.812 89.888 200.812 200.812-89.887 200.813-200.812 200.813z"/></svg>

                    <span class="time-box__time main_timer"></span>
                    <span class="time-box__relative">mins remaining</span>
                </div>

            </section>

            <nav class="btn-menu c-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" height="30px" class="c-button__icon"><g><path d="M2.252 10.27h58.87c1.125 0 2.035-.91 2.035-2.033 0-1.123-.91-2.034-2.034-2.034H2.253c-1.125 0-2.035.91-2.035 2.034 0 1.123.91 2.034 2.034 2.034zM61.123 30.015H2.253c-1.125 0-2.035.912-2.035 2.035 0 1.122.91 2.034 2.034 2.034h58.87c1.125 0 2.035-.912 2.035-2.034 0-1.123-.91-2.035-2.034-2.035zM61.123 53.876H2.253c-1.125 0-2.035.91-2.035 2.034 0 1.123.91 2.034 2.034 2.034h58.87c1.125 0 2.035-.91 2.035-2.034 0-1.124-.91-2.034-2.034-2.034z"/></g></svg>

                <span class="c-button__caption">Menu</span>

                <ul class="o-primary-nav">
                    <li class="btn-questions">Questions</li>
                    <li class="btn-end-exam">End exam</li>					
                </ul>
            </nav>

            <div class="btn-questions c-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" height="30px" class="c-button__icon"><path d="M14 21h12c.552 0 1-.447 1-1 0-.553-.448-1-1-1H14c-.552 0-1 .447-1 1 0 .553.448 1 1 1zm0-5h16c.552 0 1-.447 1-1 0-.553-.448-1-1-1H14c-.552 0-1 .447-1 1 0 .553.448 1 1 1zm0 15h12c.552 0 1-.447 1-1 0-.553-.448-1-1-1H14c-.552 0-1 .447-1 1 0 .553.448 1 1 1zm0-5h16c.552 0 1-.447 1-1 0-.553-.448-1-1-1H14c-.552 0-1 .447-1 1 0 .553.448 1 1 1zM37 5h-4c-.552 0-1 .447-1 1 0 .553.448 1 1 1h3v35H8V7h3c.552 0 1-.447 1-1 0-.553-.448-1-1-1H7c-.552 0-1 .447-1 1v37c0 .553.448 1 1 1h30c.552 0 1-.447 1-1V6c0-.553-.448-1-1-1z"/><path fill-rule="evenodd" d="M29 3h-4V1c0-.553-.448-1-1-1h-4c-.552 0-1 .447-1 1v2h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1h14c.552 0 1-.447 1-1V4c0-.553-.448-1-1-1zm-1 4H16V5h5V2h2v3h5v2z"/></svg>

                <span class="c-button__caption">Questions</span>
            </div>

        </header>

        <main>

            <section class="o-content-box js-content">

                <p id="question" class="c-question"></p>

                <div class="o-options-box">

                    <div id="option-1" class="c-option js-option" data-option="a">
                        <div id="option-1-button" class="c-option__button js-option-button">A</div>
                        <p id="option-1-caption" class="c-option__caption"></p>
                    </div>

                    <div id="option-2" class="c-option  js-option" data-option="b">
                        <div id="option-2-button" class="c-option__button js-option-button">B</div>
                        <p id="option-2-caption" class="c-option__caption"></p>
                    </div>

                    <div id="option-3" class="c-option  js-option" data-option="c">
                        <div id="option-3-button" class="c-option__button js-option-button">C</div>
                        <p id="option-3-caption" class="c-option__caption"></p>
                    </div>

                    <div id="option-4" class="c-option  js-option" data-option="d">
                        <div id="option-4-button" class="c-option__button js-option-button">D</div>
                        <p id="option-4-caption" class="c-option__caption"></p>
                    </div>

                </div>

            </section>

        </main>

        <section class="o-action-panel">
            <a id="prev-button" class="c-button js-question-button" href="">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.494 31.494" height="40px" class="c-button__icon"><path d="M10.273 5.01c.444-.445 1.143-.445 1.587 0 .43.428.43 1.142 0 1.57l-8.047 8.047h26.554c.62 0 1.127.492 1.127 1.11 0 .62-.508 1.128-1.127 1.128H3.813l8.047 8.032c.43.444.43 1.16 0 1.587-.444.444-1.143.444-1.587 0L.32 16.532c-.428-.43-.428-1.143 0-1.57l9.953-9.953z"/></svg>

                <span class="c-button__caption">Prev</span>
            </a>

            <div id="save-button" class="c-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510" height="40px" class="c-button__icon"><path d="M150.45 206.55l-35.7 35.7L229.5 357l255-255-35.7-35.7-219.3 219.3-79.05-79.05zM459 255c0 112.2-91.8 204-204 204S51 367.2 51 255 142.8 51 255 51c20.4 0 38.25 2.55 56.1 7.65l40.8-40.8C321.3 7.65 288.15 0 255 0 114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255h-51z"/></svg>

                <span class="c-button__caption">Save</span>
            </div>

            <div id="mark-button" class="c-button btn-mark">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="40px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>

                <span class="c-button__caption">Mark</span>
            </div>

            <div id="clear-button" class="c-button btn-clear">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 774.266 774.266" height="40px" class="c-button__icon"><path d="M640.35 91.17H536.97V23.99C536.97 10.47 526.065 0 512.544 0c-1.312 0-2.187.438-2.614.875-.44-.437-1.314-.875-1.75-.875H261.72c-13.52 0-23.99 10.47-23.99 23.99v67.18H133.916c-29.667 0-52.783 23.116-52.783 52.783V230.32h45.803v491.6c0 29.67 22.68 52.347 52.346 52.347h415.703c29.667 0 52.782-22.678 52.782-52.346v-491.6h45.366V143.954c0-29.667-23.125-52.784-52.783-52.784zM285.713 47.98h202.84v43.19h-202.84V47.98zM599.35 721.923c0 3.06-1.313 4.363-4.365 4.363H179.282c-3.052 0-4.364-1.303-4.364-4.363V230.32h424.43v491.602zm45.365-539.583H129.55V143.95c0-3.053 1.313-4.802 4.365-4.802H640.35c3.053 0 4.365 1.75 4.365 4.802v38.387z"/><path d="M475.03 286.593h48.42v396.942h-48.42zM363.36 286.593h48.42v396.942h-48.42zM251.69 286.593h48.418v396.942H251.69z"/></svg>

                <span class="c-button__caption">Clear</span>
            </div>

            <a id="next-button" class="c-button js-question-button" href="">
                <span class="c-button__caption">Next</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" height="40px" class="c-button__icon"><path d="M21.205 5.007c-.43-.444-1.143-.444-1.587 0-.43.43-.43 1.143 0 1.57l8.047 8.048H1.11c-.618 0-1.11.493-1.11 1.112 0 .62.492 1.127 1.11 1.127h26.555l-8.047 8.032c-.43.444-.43 1.16 0 1.587.444.444 1.16.444 1.587 0l9.952-9.952c.444-.428.444-1.142 0-1.57l-9.952-9.953z"/></svg>

            <a>
        </section>
		
		<div id="my_camera"></div>
		
        <div class="c-bg-screen"></div>

        <div class="o-modal-box">
            <div class="o-modal">
                <div class="c-close-button">X</div>
                <section class="o-stats">
                    <div class="o-stats__panel">

                        <div class="c-stats">
                            <div class="c-stats__answered"></div>
                            <span id="q-answered-label" class="em--m">0</span>     <!-- new id inserted -->
                            <span class="em--l"> answered</span>
                        </div>

                        <div class="c-stats">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#EFCE4A" viewBox="0 0 53.867 53.867" height="40px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                            <span id="q-marked-label" class="em--m">0</span>     <!-- new id inserted -->
                            <span class="em--l"> to review</span>
                        </div>

                        <div class="c-stats">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 497.25 497.25" height="40px" class="c-stats__icon" fill="#999"><path d="M258.188 250.537v-107.1c0-5.737-3.825-9.562-9.562-9.562s-9.562 3.825-9.562 9.562v107.1c-11.475 3.825-19.125 15.3-19.125 26.775s7.65 22.95 19.124 26.775v30.6c0 5.737 3.825 9.562 9.562 9.562s9.562-3.826 9.562-9.563v-30.6c11.475-3.825 19.125-15.3 19.125-26.775s-7.65-22.95-19.125-26.775zm-9.563 36.338c-5.737 0-9.562-3.825-9.562-9.562s3.825-9.562 9.562-9.562 9.562 3.826 9.562 9.563-3.825 9.562-9.562 9.562z"/><path d="M411.188 128.138l22.95-22.95 13.388 13.388 13.387-13.388-40.163-40.163-13.388 13.388L420.75 91.8l-22.95 22.95c-36.337-34.425-86.062-55.462-139.612-57.375v-38.25h19.125V0h-57.375v19.125h19.125v38.25C122.4 63.112 28.688 158.737 28.688 277.312c0 122.4 97.538 219.938 219.938 219.938 122.4 0 219.938-97.537 219.938-219.938-.002-57.374-21.04-109.012-57.376-149.174zM248.625 478.125c-110.925 0-200.812-89.888-200.812-200.812S137.7 76.5 248.625 76.5s200.812 89.888 200.812 200.812-89.887 200.813-200.812 200.813z"/></svg>

                            <span class="em--m main_timer"></span>
                            <span class="em--l">mins remaining</span>
                        </div>

                    </div>

                </section>

                <section class="o-content-box">

                    <section class="o-section">
                        <h3 class="o-section__heading">Numerical</h3>

                        <div class="o-section__questions-box">

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=1>
                                    <span>1</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=2>
                                    <span>2</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=3>
                                    <span>3</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=4>
                                    <span>4</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=5>
                                    <span>5</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=6>
                                    <span>6</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=7>
                                    <span>7</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=8>
                                    <span>8</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=9>
                                    <span>9</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=10>
                                    <span>10</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=11>
                                    <span>11</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=12>
                                    <span>12</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=13>
                                    <span>13</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=14>
                                    <span>14</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=15>
                                    <span>15</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=16>
                                    <span>16</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=17>
                                    <span>17</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=18>
                                    <span>18</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=19>
                                    <span>19</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=20>
                                    <span>20</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                        </div>

                    </section>

                    <section class="o-section">

                        <h3 class="o-section__heading">English</h3>

                        <div class="o-section__questions-box">

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=21>
                                    <span>21</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=22>
                                    <span>22</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=23>
                                    <span>23</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=24>
                                    <span>24</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=25>
                                    <span>25</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=26>
                                    <span>26</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=27>
                                    <span>27</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=28>
                                    <span>28</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=29>
                                    <span>29</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=30>
                                    <span>30</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=31>
                                    <span>31</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=32>
                                    <span>32</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=33>
                                    <span>33</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=34>
                                    <span>34</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=35>
                                    <span>35</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=36>
                                    <span>36</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=37>
                                    <span>37</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=38>
                                    <span>38</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=39>
                                    <span>39</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=40>
                                    <span>40</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                        </div>

                    </section>

                    <section class="o-section">

                        <h3 class="o-section__heading">Psychometric</h3>

                        <div class="o-section__questions-box">

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=41>
                                    <span>41</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=42>
                                    <span>42</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=43>
                                    <span>43</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=44>
                                    <span>44</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=45>
                                    <span>45</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=46>
                                    <span>46</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=47>
                                    <span>47</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=48>
                                    <span>48</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=49>
                                    <span>49</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=50>
                                    <span>50</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=51>
                                    <span>51</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=52>
                                    <span>52</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=53>
                                    <span>53</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=54>
                                    <span>54</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=55>
                                    <span>55</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                            <div class="o-section__questions-row">

                                <div class="c-question-no" data-q-no=56>
                                    <span>56</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=57>
                                    <span>57</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=58>
                                    <span>58</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=59>
                                    <span>59</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                                <div class="c-question-no" data-q-no=60>
                                    <span>60</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.867 53.867" height="20px" class="c-button__icon"><path d="M26.934 1.318l8.322 16.864 18.61 2.705L40.4 34.013l3.18 18.536-16.646-8.752-16.646 8.75 3.18-18.535L0 20.887l18.61-2.705"/></svg>
                                </div>

                            </div>

                        </div>

                    </section>

                </section>

            </div>

        </div>

<!----//Start Exam--------->
<div id="StartExamModal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<!-- dialog header -->
	  <div class="modal-header">
        <h4 class="modal-title">Wish You very best of luck for your exam!</h4>		
      </div>
      <!-- dialog body -->
      <div class="modal-body">
        <button id="startExam" type="button" class="btn btn-primary btn-lg btn-block">Start Exam</button>
      </div>
    </div>
  </div>
</div>
<!----//Start Exam--------->

<!----//Warning--------->
<div id="WarningModal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<!-- dialog header -->
	  <div class="modal-header">
        <h4 class="modal-title" id="warningText"></h4>
      </div>
      <!-- dialog body -->
      <div class="modal-body">
		<div class="timer">
            <span class="hour">00</span>:<span class="minute">00</span>:<span class="second">00</span>
        </div>
        <button id="continueExam" type="button" class="btn btn-danger btn-lg btn-block">Continue Exam</button>
      </div>
    </div>
  </div>
</div>
<!----//Warning--------->

<!----------end exam dialog---------------->
<div id="endExamModal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        Are you sure you want to end exam?
      </div>
      <!-- dialog buttons -->
      <div class="modal-footer">
	  <div class="col-md-6">
	  <button type="button" class="btn btn-default btn-lg btn-block btn-true noradius">Yes</button>
	  </div>
	  <div class="col-md-6">
	  <button type="button" class="btn btn-primary btn-lg btn-block btn-false noradius">No</button>
	  </div>
	  </div>
    </div>
  </div>
</div>
<!----------//end exam dialog---------------->

<div id="my_camera"></div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="/js/screenfull.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
		<script src="js/timer.js"></script>
		<script type="text/javascript" src="/js/webcam.min.js"></script>

        <script>

var exam_duration, questions_loaded = false, answer;

$( document ).ready(function() {

			$.getJSON('/fetch_question_paper', function(data){

				var question_paper = data;
				var no_of_questions = question_paper.no_of_questions;
				var question_no = parseInt(question_paper.current_question);        // current question
                var prev_q_no, next_q_no;
                var first_q_no = 1, last_q_no = no_of_questions;

                // set links of prev & next button
                var prev_question = $('#prev-button');
                var next_question = $('#next-button');

                var set_question_links = function(){

                    if( question_no > first_q_no ){
                        prev_q_no = question_no - 1;
                        prev_question.attr( 'href','questions/'+ prev_q_no );
                        prev_question.removeClass('is-disabled')
                    }
                    else{
                        prev_question.attr('href', '');
                        prev_question.addClass('is-disabled')
                    }

                    if( question_no < last_q_no ){
                        next_q_no = question_no + 1;
                        next_question.attr( 'href','questions/'+ next_q_no );
                        next_question.removeClass('is-disabled')
                    }
                    else {
                        {
                            next_question.attr('href', '');
                            next_question.addClass('is-disabled');
                        }
                    }
                }

                // question & details injection

                var section_box  = $('#section');
                var question_no_box  = $('#question-no');
                var question_box = $('#question');
                var option_1_box = $('#option-1-caption');
                var option_2_box = $('#option-2-caption');
                var option_3_box = $('#option-3-caption');
                var option_4_box = $('#option-4-caption');

                var save_button = $('#save-button');
                var mark_button  = $('#mark-button');
                var clear_button = $('#clear-button');

                var content = $('.js-content');


                var get_q_details = function(question_no){
                    // retrieve the question and details
                    question_details = question_paper.questions[question_no];

                    section  = question_details.section;
                    question = question_details.question;
                    option_1 = question_details.a;
                    option_2 = question_details.b;
                    option_3 = question_details.c;
                    option_4 = question_details.d;
                }


// questions status : block modified, replace the old block, some codes are old, some are new
                answer = new Array(no_of_questions+1), marked = new Array(no_of_questions+1);

                var q_answered = 0, q_marked = 0;       // old line, inserted here

                var q_answered_label = $('#q-answered-label');      // code from modal inserted
                var q_marked_label = $('#q-marked-label');

                var update_q_answered_label = function(){
                    q_answered_label.html(q_answered);
                }

                var update_q_marked_label = function(){
                    q_marked_label.html(q_marked);
                }                                                  // // code from modal end

                for ( var q_no = first_q_no; q_no<=last_q_no; q_no++ )      // variable renamed from 'i' to 'q_no'
                {
                    answer[q_no] = question_paper.questions[q_no].answer;
                    marked[q_no] = question_paper.questions[q_no].marked;

                    if( answer[q_no] != '' ){
                        $('[data-q-no="'+q_no+'"].c-question-no').addClass('is-answered');
                        q_answered++;
                        update_q_answered_label();
                    }

                    if( marked[q_no] == true ){
                        $('[data-q-no="'+q_no+'"].c-question-no').addClass('is-marked');
                        q_marked++;
                        update_q_marked_label();
                    }
                }

// block ended

                var clear_options = function(){
                    $(option_button).removeClass('is-answered');
                    save_button.removeClass('is-answered');
                    save_button.addClass('is-disabled');
                };

                var clear_save = function(){
                    $(save_button).removeClass('is-answered');
                };

                var clear_mark = function(){
                    $(mark_button).removeClass('is-marked');
                };


//==========    questions modal module inserted here

                var questions_button = $('.btn-questions');
                var bg_screen = $('.c-bg-screen');
                var modal = $('.o-modal-box');
                var close_button = $('.c-close-button');

                // opening & closing questions modal
                $(questions_button).on('click', function(){
                    $(bg_screen).addClass('is-shown');
                    $(modal).addClass('is-shown');
                });

                $(close_button).add(modal).on('click', function(){
                    $(bg_screen).removeClass('is-shown');
                    $(modal).removeClass('is-shown');
                });

                // loading the status into the modal

                var q_stat_button = $('.c-question-no');

                var q_stat_add_answered = function(){
                    $('[data-q-no="'+question_no+'"].c-question-no').addClass('is-answered');
                }

                var q_stat_remove_answered = function(){
                    $('[data-q-no="'+question_no+'"].c-question-no').removeClass('is-answered');
                }

                var q_stat_add_marked = function(){
                    $('[data-q-no="'+question_no+'"].c-question-no').addClass('is-marked');
                }

                var q_stat_remove_marked = function(){
                    $('[data-q-no="'+question_no+'"].c-question-no').removeClass('is-marked');
                }

                q_stat_button.on('click', function(){
                    question_no = $(this).data('q-no');
                    insert_question(question_no);
                });
// question modal ends

// mark/unmark_question() is inserted here

                var mark_question = function(question_no){

//__________________// update

                    var data_json = {
                        question_no : question_no
                    }
//--------mark question actions----------------//
					$(mark_button).addClass('is-marked');
                            //update
					marked[question_no] = true;
					q_stat_add_marked();
					update_q_marked_label();        // new code
//--------//mark question actions----------------//
					
                    $.ajax({
                        url: '/mark_question',
                        type: 'get',
                        success: function (data) {
							//notification
                        },
                        data: data_json
                    });
//__________________

                };

                var unmark_question = function(){

//__________________// update

                    var data_json = {
                        question_no : question_no
                    }

//---------------unmark question actions----------------//					
					if( $(mark_button).hasClass('is-marked') )
							{
								$(mark_button).removeClass('is-marked');

								//update
								marked[question_no] = false;
								q_stat_remove_marked();
								update_q_marked_label();        // new code
							}
//---------------//unmark question actions----------------//

                    $.ajax({
                        url: '/unmark_question',
                        type: 'get',
                        success: function (data) {
                            //notification
                        },
                        data: data_json
                    });
//__________________

                };

// mark/unmark_question() ends

                // insert question function
                var insert_question = function(q_no){
                    question_no = q_no;

//__________________// update

                    var data_json = {
                        question_no : question_no
                    }

                    $.ajax({
                        url: '/current_question',
                        type: 'get',
                        dataType: 'json',
                        success: function (data) {
                            // notification
                        },
                        data: data_json
                    });
//__________________

                    clear_options();
                    clear_save();
                    clear_mark();

                    get_q_details(question_no);

                    section_box.html(section);
                    question_no_box.html(question_no);
                    question_box.html(question);
                    option_1_box.html(option_1);
                    option_2_box.html(option_2);
                    option_3_box.html(option_3);
                    option_4_box.html(option_4);

                    if(answer[question_no] != ""){
                        save_button.addClass('is-answered');
                        $('[data-option="'+answer[question_no]+'"].js-option>.js-option-button').addClass('is-answered');
                    }
                    else {
                        save_button.addClass('is-disabled');
                    }

                    // if marked add class is-marked
                    if( marked[question_no] == true )
                        mark_question(question_no);

                    // set links of prev & next button
                    set_question_links();

                };

                insert_question(question_no);


                // on clicking question buttons
                var question_button = $('.js-question-button');

                question_button.on('click', function(e){
                    e.preventDefault();

                    var href = $(this).attr('href');
                    question_no = parseInt(href.split('/').pop());
                    // manipulate history
                    // history.pushState('', '', href);

                    insert_question(question_no);
                });

                var option = $('.js-option');
                var option_button = $('.js-option-button');

                option.on('click', function(){
                    clear_options();
                    select_answer(this);
                    save_button.removeClass('is-disabled');
                });

                var select_answer = function(selector){
                    $(selector).find( option_button ).addClass('is-answered');
                };

                save_button.on('click', function(){
                    if( !save_button.hasClass('is-disabled') )
                    {
//----------------------<
                        if( answer[question_no] == '' ){
                            q_answered++;                   // new code
                            update_q_answered_label();      // new code
                        }

                        //update server
                        answer[question_no] = $('.js-option-button.is-answered').parent('.js-option').data("option");    // selected answer
                        save_button.addClass('is-answered');
                        q_stat_add_answered();
//---------------------->

    //__________________// update

                        var data_json = {
                            question_no : question_no,
                            answer : answer[question_no]
                        }
						
                        $.ajax({
                            url: '/update_answer',
                            type: 'get',
                            success: function (data) {
                                //notification
                            },
                            data: data_json
                        });
    //__________________
                    }
                });

                // on clicking mark button
                mark_button.on('click', function(){

                    if( $(this).hasClass('is-marked')){
                        q_marked--;                     // new code
                        unmark_question(question_no);
                    }
                    else {
                        q_marked++;                     // new code
                        mark_question(question_no);
                    }
                });


                // on clicking clear button
                clear_button.on('click', function(){
                        clear_answer(question_no);
                });

                var clear_answer = function(question_no){
                    clear_options();

//------------------<
                    if( answer[question_no] != '' ){
                        q_answered--;                   // new code
                        update_q_answered_label();      // new code
                    }

                    // update
                    answer[question_no] = '';
                    q_stat_remove_answered();
//------------------>

//__________________// update

                    var data_json = {
                        question_no : question_no
                    }

                    $.ajax({
                        url: '/clear_answer',
                        type: 'get',
                        success: function (data) {
							//notification
                        },
                        data: data_json
                    });
//__________________

                };



exam_duration = 60 * question_paper.time_remaining;
questions_loaded = true;

			});
});

$( document ).ready(function() {

var full_screen = false;
var warningTimer;
var time_remaining;
var display = $('.main_timer');

var warningDuration = 60 * 0.15, warningDisplay = $('#warningTime');

$('#startExam').click(function () {
	if(questions_loaded){
		screenfull.request();
		$('#StartExamModal').modal('hide');
		startTimer(exam_duration, display);
		full_screen = true;
	}
});

// btn-end-exam
                var end_exam_button = $('.btn-end-exam');

                end_exam_button.on('click', function(){
                    // code for endexam
					var modalId = '#endExamModal';
					$(modalId).modal({
					  "backdrop"  : "static",
					  "keyboard"  : false,
					  "show"      : true
					});

					$(modalId).on("shown.bs.modal", function() {
						$(modalId + " .btn-true").on("click", function(e) {
							endExam();
						});
						$(modalId + " .btn-false").on("click", function(e) {
							$(modalId).modal('hide');
						});
					});
                });
				
function endExam(){
	$.ajax({
		 type: "post",
		 url: "/endexam",
		 data: {"answers": answer,  "_token": "<?php echo(csrf_token()); ?>" },
		 success: function (data) {
			window.close();
			window.location.replace('/closewindow');
		},
		error: function(xhr){
			window.location.replace('/closewindow');
		}
	});
}

		var timerHighlight = false;

		function startTimer(duration, display) {
					var timer = duration, minutes, seconds;
					var refreshIntervalId = setInterval(function () {
						minutes = parseInt(timer / 60, 10)
						seconds = parseInt(timer % 60, 10);

						minutes = minutes < 10 ? "0" + minutes : minutes;
						seconds = seconds < 10 ? "0" + seconds : seconds;

						time_remaining = minutes + "." + seconds;

						display.text(minutes + ":" + seconds);

						if (--timer < 0) {
							clearInterval(refreshIntervalId);
							endExam();
							return;
						}

						if (time_remaining <= 10.00) {
							if(timerHighlight == false){
								display.addClass("timerHighlight");
								timerHighlight = true;
							}
						}

					}, 1000);
		}

		var update_time = function(){
		//__________________// update

                    var data_json = {
                        time_remaining : time_remaining
                    }

                    $.ajax({
                        url: 'update_time',
                        type: 'get',
                        success: function (data) {
                            //notification
                        },
                        data: data_json
                    });
//__________________
		}

	setInterval(function () {
			update_time();
		}, 60000);


/*-----------Stop Hacking and Cheating in exam---------------*/



	$('#StartExamModal').modal({
		backdrop: 'static',
		keyboard: false
	});

	function fullscreenchange() {
		if (!screenfull.isFullscreen) {
			if(full_screen){
				full_screen = false;
				warning("Please continue exam or you will be disqualified!");

			}
		}
	}

	document.addEventListener(screenfull.raw.fullscreenchange, fullscreenchange);

	// set the initial values
	fullscreenchange();

	document.onkeydown = function (e) {
		warning("Please don't press any keyboard key or you will be disqualified!");
        return false;
	}

	$('#continueExam').click(function () {
		removeWarning();
		screenfull.request();
		full_screen = true;
	});

	var timer = new _timer
    (
        function(time)
        {
            if(time == 0)
            {
                timer.stop();
                endExam();
				return;
            }
        }
    );

	function startWarningTimer(duration, display) {
		timer.reset(10);
		timer.mode(0);
		timer.start(1000);
	}

	function stopWarningTimer() {
		timer.reset(10);
		timer.stop();
	}

	function warning(warningText){

		$("#warningText").text(warningText);

		$('#WarningModal').modal({
			backdrop: 'static',
			keyboard: false
		});

		startWarningTimer(warningDuration, warningDisplay);
	}

	function removeWarning(){
		stopWarningTimer();
		$('#WarningModal').modal('hide');
	}

/*-----------Disable right click-------------*/
	document.onmousedown=disableclick;
	rt_status="Right Click Disabled";
	function disableclick(event)
	{
	  if(event.button==2)
	   {
		 alert(rt_status);
		 return false;
	   }
	}
/*-----------//-------------*/
	
	var deviceFound = false;
	
	video = document.getElementById('my_camera');
	
	function init(){
		
		/*---force_flash: true---*/
		
		Webcam.set({
			width: 240,
			height: 180,
			image_format: 'jpeg',
			jpeg_quality: 60,
			force_flash: true,
			flashNotDetectedText: 'No Adobe Flash Player. <a href="https://get.adobe.com/flashplayer/" target="_blank">Download latest version here.</a>'
		});
		
		Webcam.attach( '#my_camera' );
		
		Webcam.on( 'load', function() {
        // library is loaded
		});
		
		Webcam.on( 'live', function() {
			deviceFound = true;
			$(video).css("visibility", "hidden");
		});
		
		Webcam.on( 'error', function(err) {
			//error message
		});
		
	}
	
	init();
	
	function take_snapshot() {
		Webcam.snap( function(data_uri) {
			
			var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
			
			$.get('/getphoto', {photo:raw_image_data}, function(data,status,xhr){
				//notification
			});			
			
		} );
	}
	
	var interval = 15*60*1000;

	setInterval( function(){

		if( deviceFound )
		{
			take_snapshot();
		}			
		
	}, interval );
	
});

        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->

    </body>
</html>
