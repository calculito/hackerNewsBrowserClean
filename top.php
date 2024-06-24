<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<title>HACKER NEWS</title>
	<meta name="viewport"
		content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="msapplication-tap-highlight" content="no" />
	<meta name="theme-color" content="#000000" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="HACKER NEWS" />
</head>

<body>
	<header class="title-content subtle-glow-warble" aria-label="Main navigation">
		<div class="nav-buttons">
			<nav id="nav-button-top" class="text-link-button" aria-label="Top Stories" title="Top Stories"><i
					class="material-icons"> upload </i></nav>
			<div class="text-link-button-spacer">|</div>
			<nav id="nav-button-new" class="text-link-button" aria-label="New Stories" title="New Stories"> <i
					class="material-icons"> new_releases </i> </nav>
			<div class="text-link-button-spacer">|</div>
			<nav id="nav-button-best" class="text-link-button" aria-label="Best Stories" title="Best Stories"> <i
					class="material-icons"> star </i> </nav>
			<div class="text-link-button-spacer">|</div>
			<nav id="nav-button-ask" class="text-link-button" aria-label="Ask HN" title="Ask HN"> <i class="material-icons">
					theater_comedy </i> </nav>
			<div class="text-link-button-spacer">|</div>
			<nav id="nav-button-show" class="text-link-button" aria-label="Show HN" title="Show HN"> <i
					class="material-icons"> preview</i> </nav>
			<div class="text-link-button-spacer">|</div>
			<nav id="nav-button-job" class="text-link-button" aria-label="Jobs" title="Jobs"> <i class="material-icons">
					work</i> </nav>
		
		</div>
	</header>
	<main class="main-content">
		<section id="loading-outlet" class="use-gpu-rendering stories-loading-animation" style="display: none"
			aria-live="polite"></section>
		<section id="top-outlet" class="use-gpu-rendering" style="display: none" aria-live="polite"></section>
		<section id="new-outlet" class="use-gpu-rendering" style="display: none" aria-live="polite"></section>
		<section id="best-outlet" class="use-gpu-rendering" style="display: none" aria-live="polite"></section>
		<section id="ask-outlet" class="use-gpu-rendering" style="display: none" aria-live="polite"></section>
		<section id="show-outlet" class="use-gpu-rendering" style="display: none" aria-live="polite"></section>
		<section id="job-outlet" class="use-gpu-rendering" style="display: none" aria-live="polite"></section>
		<section id="favorites-outlet" class="use-gpu-rendering" style="display: none" aria-live="polite"></section>
		<section id="settings-outlet" class="use-gpu-rendering" style="display: none" aria-live="polite">
			<h3>Change Color Settings</h3>
			<div class="adjust-theme-content" role="table" id="settings-content-container">
				<div class="setting-element" id="setting--color-primary">
					<div class="setting-name" role="label">primary</div>
					<div class="setting-new-value-input">
						<input type="color" id="setting-input--color-primary" />
					</div>
					<button class="setting-apply-button" id="apply-setting--color-primary"> Apply </button>
					<button class="setting-reset-button" id="reset-setting--color-primary"> Reset </button>
				</div>
				<div class="setting-element" id="setting--color-secondary">
					<div class="setting-name" role="label">secondary</div>
					<div class="setting-new-value-input">
						<input type="color" id="setting-input--color-secondary" />
					</div>
					<button class="setting-apply-button" id="apply-setting--color-secondary"> Apply </button>
					<button class="setting-reset-button" id="reset-setting--color-secondary"> Reset </button>
				</div>
				<div class="setting-element" id="setting--color-accent-1">
					<div class="setting-name" role="label">accent-1</div>
					<div class="setting-new-value-input">
						<input type="color" id="setting-input--color-accent-1" />
					</div>
					<button class="setting-apply-button" id="apply-setting--color-accent-1"> Apply </button>
					<button class="setting-reset-button" id="reset-setting--color-accent-1"> Reset </button>
				</div>
				<div class="setting-element" id="setting--color-accent-2">
					<div class="setting-name" role="label">accent-2</div>
					<div class="setting-new-value-input">
						<input type="color" id="setting-input--color-accent-2" />
					</div>
					<button class="setting-apply-button" id="apply-setting--color-accent-2"> Apply </button>
					<button class="setting-reset-button" id="reset-setting--color-accent-2"> Reset </button>
				</div>
				<div class="setting-element" id="setting--color-dark">
					<div class="setting-name" role="label">dark</div>
					<div class="setting-new-value-input">
						<input type="color" id="setting-input--color-dark" />
					</div>
					<button class="setting-apply-button" id="apply-setting--color-dark"> Apply </button>
					<button class="setting-reset-button" id="reset-setting--color-dark"> Reset </button>
				</div>
				<div class="setting-element" id="setting--color-light">
					<div class="setting-name" role="label">light</div>
					<div class="setting-new-value-input">
						<input type="color" id="setting-input--color-light" />
					</div>
					<button class="setting-apply-button" id="apply-setting--color-light"> Apply </button>
					<button class="setting-reset-button" id="reset-setting--color-light"> Reset </button>
				</div>
				<div class="setting-element" id="setting--color-text-main">
					<div class="setting-name" role="label">text-main</div>
					<div class="setting-new-value-input">
						<input type="color" id="setting-input--color-text-main" />
					</div>
					<button class="setting-apply-button" id="apply-setting--color-text-main"> Apply </button>
					<button class="setting-reset-button" id="reset-setting--color-text-main"> Reset </button>
				</div>
				<p id="theme-applied-outlet"></p>
			</div>
			<br />
			<button id="download-theme-button" class="button-large full-width-mobile"> 💾 Download Current Color Theme
			</button>
			<br />
			<br />
			<br />
			<br />
			<h3>Default Color Themes</h3>
			<div class="setting-buttons-row">
				<button id="button-theme-default">DEFAULT</button>
				<button id="button-theme-greyscale">𝔤𝔯𝔢𝔶𝔰𝔠𝔞𝔩𝔢</button>
				<button id="button-theme-board">Ｂｏａｒｄ</button>
				<button id="button-theme-y2k">ⓨ²ⓚ</button>
				<button id="button-theme-fuji">🗻🗻🗻</button>
				<button id="button-theme-rainbow">✦☾⇢✧⇠☽✦</button>
				<button id="button-theme-plastic">ℙ𝕝𝕒𝕤𝕥𝕚𝕔</button>
				<button id="button-theme-dream-pop">DrE∀M P♡P</button>
				<button id="button-theme-hash">ʜᴀѕн</button>
				<button id="button-theme-block-cipher">███ɃŁØ₵ƙ₵ᎥƤђɆя███</button>
				<button id="button-theme-neon-concrete">N3ØN ₵ØN₵RΣTΣ</button>
				<button id="button-theme-away">✉Away✉</button>
				<button id="button-theme-solarpunk">S☼LΛRPUNK</button>
				<button id="button-theme-hyperreality">H¥P3RR34L!TY</button>
				<button id="button-theme-hippie">Ħłρρłε</button>
				<button id="button-theme-cybernetic-dream">⊂¥βΞ尺ภΞ†เς Ð尺ΞΛⓜ</button>
				<button id="button-theme-petal-dream">✿ Pétäl Drëäm ✿</button>
				<button id="button-theme-neo-tokyo">新しい東京</button>
				<button id="button-theme-china">中國龍</button>
				<button id="button-theme-sakura-matsuri">桜ーまつり</button>
				<button id="button-theme-sao-paulo">🄼🄴🅃🄾́🄿🄾🄻🄸🅂 🄿🄰🅄🄻🄸🅂🅃🄰</button>
				<button id="button-theme-lagos">ḺᾰǤⱺϨ⸚ 𝔽𝕌𝕋𝕌ℝ𝔸</button>
				<button id="button-theme-nyc">𝕟𝕪𝕔</button>
				<button id="button-theme-washington">Ⓦⓐⓢⓗⓘⓝⓖⓣⓞⓝ</button>
				<button id="button-theme-miami">MⓘⒶMⓘ</button>
				<button id="button-theme-neo-vegas">𝓝𝓮𝓸 𝓥𝓮𝓰𝓪𝓼</button>
				<button id="button-theme-moto">ⓜⓞⓣⓞ</button>
				<button id="button-theme-delhi">नई नई दिल्ली</button>
				<button id="button-theme-cyber-citrus">ℂ𝕚𝕥𝕣𝕦𝕤</button>
				<button id="button-theme-noir">∅byssal Noir</button>
				<button id="button-theme-vaporwave">VAPORWAVE</button>
				<button id="button-theme-pastel-goth">𝔓𝔞𝔰𝔱𝔢𝔩 𝔊𝔬𝔱𝔥</button>
				<button id="button-theme-scene">𝚛𝚎𝚜𝚌𝚎𝚗𝚌𝚎</button>
				<button id="button-theme-sleeze">𝕾𝖑𝖊𝖆𝖟𝖊</button>
				<button id="button-theme-zine">Z̲̅i̲̅n̲̅e̲̅</button>
				<button id="button-theme-irc">IRC₍ᴵₙₜₑᵣₙₑₜ ᴿₑₗₐᵧ ₢ₕₐₜ₎</button>
				<button id="button-theme-bbs">ßßₛ</button>
				<button id="button-theme-psyc">ᑭѕүᴄʜ</button>
				<button id="button-theme-1984">¹⁹⁸⁴</button>
				<button id="button-theme-space">2oo4</button>
				<button id="button-theme-korea">한국의 빛</button>
				<button id="button-theme-1999">1999</button>
				<button id="button-theme-y10k">Y₁₀ₖ</button>
				<button id="button-theme-space-age">🛸🛸🛸</button>
				<button id="button-theme-eliptic-curve">ɆⱠł₱₮ł₵ ₵ɄⱤVɆ</button>
				<button id="button-theme-exit-node">Ξ𝕏ł𝕋 ℕ𝕆𝔻𝔼</button>
				<button id="button-theme-salmon">ℕ๏ภςє</button>
				<button id="button-theme-qubit">ҨบᎥƁᎥ†</button>
				<button id="button-theme-san-francisco">S⍺n Fr⍺ncisc0</button>
				<button id="button-theme-los-angeles">L0S@NGeLE$</button>
			</div>
			<br />
			<br />
			<br />
			<h3>Added Color Themes</h3>
			<div class="added-themes setting-buttons-row" id="added-themes-outlet"> You have no external themes yet </div>
			<br />
			<p> Visit <a href="https://github.com/wkyleg/brutalist-hacker-news/blob/main/themes.md"
					title="The git repository for this website" data-allow-external="true">this project's Github Repo</a> to add
				more themes, or to submit your own theme. </p>
			<br />
			<div class="setting-buttons-row">
				<button id="add-new-theme-button" class="button-large full-width-mobile"> + Add New Theme </button>
				<button id="remove-added-themes-button" class="button-large full-width-mobile" style="display:none;"> 🗑️ Clear
					Added Themes </button>
			</div>
			<br />
			<br />
			<br />
			<button id="share-website" class="button-large full-width-mobile">📤 Share This Website</button>
			<br />
			<br />
			</p>
		</section>
	</main>
</body>
<style>
	:root {
		/* Theme colors */
		--color-primary: #305777;
		--color-secondary: #c2c2c200;
		--color-accent-1: #ffffff;
		--color-accent-2: #cecece;
		--color-dark: #3c3c3c;
		--color-light: #FFF;
		--color-text-main: #2c343e;
		/* User editable but not from theme */
		--user-border-radius-modal: 4px;
		--user-border-radius-button: 2px;
		--user-font: DIN Web Pro, Helvetica, Arial, sans-serif;
		/* Other repeated CSS utilities */
		--shadow-opacity-color: rgb(0 0 0 / 10%);
		--text-shadow-highlight: 1px 1px var(--color-primary), -1px -1px var(--color-secondary);
		--box-shadow-highlight-mild: 1px 1px 2px var(--color-primary), -1px -1px 2px var(--color-secondary);
		--bow-shadow-top-level-element: 2px 2px 8px var(--shadow-opacity-color);
		--background-linear-gradient: linear-gradient(120deg, var(--color-accent-1) 0%, var(--color-accent-2) 100%);
		--text-shadow-mild: 1px 1px 2px var(--shadow-opacity-color);
		--size-3xs: 0.3rem;
		--size-xxs: 0.682rem;
		--size-xs: 0.818rem;
		--size-sm: 1.2rem;
		--size-md: 1.618rem;
		--size-lg: 2.618rem;
		--size-xl: 4.236rem;
		--size-xxl: 6.854rem;
		--top-level-padding-side: var(--size-xs);
		--modal-border-width: 3px;
	}

	* {
		font-family: var(--user-font);
		border-radius: 0;
		color: var(--color-text-main);
		border: 0;
		scrollbar-color: var(--color-primary) var(--color-secondary);
		scrollbar-width: auto;
		transition: all .2s ease-in-out;
		font-weight: normal;
		text-shadow: var(--text-shadow-mild);
		text-size-adjust: 100%;
		line-height: 1.6;
		box-sizing: border-box;
	}

	::-webkit-scrollbar {
		width: var(--size-sm);
		min-width: var(--size-sm);
	}

	::-webkit-scrollbar-track {
		background: var(--color-accent-1)
	}

	::-webkit-scrollbar-thumb {
		background: var(--color-primary);
		border-radius: 0;
		min-height: var(--size-xxl);
	}

	::-webkit-scrollbar-track:active {
		background: var(--color-secondary)
	}

	::-webkit-scrollbar-track:hover {
		background: var(--color-secondary)
	}

	::-webkit-scrollbar-thumb:active {
		box-shadow: 1px 3px var(--text-color)
	}

	::-webkit-scrollbar-thumb:hover {
		box-shadow: 1px 3px var(--color-text-main)
	}

	html {
		height: 100%;
		text-size-adjust: 100%;
		text-size-adjust: 100%;
	}

	body {
		margin: 0;
		padding: 0;
		height: 100%;
		min-height: 100vh;
		min-height: fill-available;
		max-height: 100%;
		width: 100%;
		min-width: 100%;
		max-width: 100%;
		display: flex;
		flex-direction: column;
		position: fixed;
		text-rendering: optimizelegibility;
		overflow: hidden;
		touch-action: manipulation;
		-webkit-user-drag: none;
		-ms-content-zooming: none;
		word-wrap: break-word;
		overscroll-behavior-y: none;
		text-size-adjust: none;
	}

	@font-face {
		font-family: "Material Icons";
		font-style: normal;
		font-weight: 400;
		src: local("Material Icons"), local("MaterialIcons-Regular"),
			url("MaterialIcons-Regular.ttf") format("truetype");
	}

	@font-face {
		font-family: "DIN Web Pro";
		src: url("DINWebPro.woff");
	}

	.material-icons {
		color: #7b9dbe;
		font-family: "Material Icons", sans-serif;
		font-weight: normal;
		font-style: normal;
		font-size: 30px;
		/* Preferred icon size */
		display: inline-block;
		line-height: 1;
		text-transform: none;
		letter-spacing: normal;
		word-wrap: normal;
		white-space: nowrap;
		direction: ltr;
		cursor: pointer;
		/* Support for all WebKit browsers. */
		-webkit-font-smoothing: antialiased;
		/* Support for Safari and Chrome. */
		text-rendering: optimizeLegibility;
		/* Support for Firefox. */
		-moz-osx-font-smoothing: grayscale;
		/* Support for IE. */
		font-feature-settings: "liga";
	}
	@media screen and (width <=640px) {
		.material-icons {
		font-size: 2.2rem;
		}
	}
	h1 {
		font-size: var(--size-md);
		text-align: center;
		color: transparent;
		text-shadow: var(--text-shadow-highlight);
		font-weight: 700
	}

	h3 {
		margin-top: 0;
		margin-bottom: var(--size-xs);
		color: var(--color-primary);
		font-size: var(--size-md);
		font-weight: 800;
	}

	input[type="text"] {
		padding: 0.25rem 0.5rem;
		background: var(--color-light);
		color: var(--color-text-main);
		border: 1px solid var(--color-text-main);
		box-shadow: 1px 1px 3px var(--color-text-main);
		border-radius: var(--user-border-radius-button);
	}

	input[type="color"] {
		background: transparent;
		border: 0;
		padding: 0;
	}

	a {
		text-decoration: underline;
		cursor: pointer;
		color: var(--color-text-main);
		font-weight: bold;
	}

	iframe {
		width: 100%;
		height: 100%;
		max-height: 100%;
		background: var(--color-light);
	}

	a,
	button,
	input {
		transition: all .1s ease-in-out
	}

	code,
	kbd,
	pre,
	samp,
	a,
	.modal-content-post {
		word-break: break-word;
		word-wrap: break-word;
		text-wrap: wrap;
	}

	pre,
	code {
		white-space: pre-wrap;
		overflow-wrap: break-word;
		background: var(--color-text-main);
		color: var(--color-light);
		font-size: var(--size-xs);
	}

	pre {
		border: var(--color-light) 1px inset;
		border-radius: var(--user-border-radius-modal);
		padding-top: var(--size-xs);
		padding-bottom: var(--size-xs);
		cursor: text;
	}

	a:hover {
		color: var(--color-primary);
		font-weight: bolder;
	}

	a:visited {
		background-color: rgb(from var(--color-text-main) r g b / 50%)
	}

	a:visited:hover {
		color: var(--color-secondary)
	}

	button {
		cursor: pointer;
		background: var(--color-light);
		color: var(--color-text-main);
		transition: all .2s ease-in-out;
		font-weight: 400;
		min-height: var(--size-sm);
		padding: 0.25rem 0.5rem;
		border-radius: var(--user-border-radius-button);
	}

	button:active {
		transform: scale(0.95);
		box-shadow: inset 2px 2px 2px var(--color-text-main)
	}

	button:hover {
		filter: brightness(1.2), contrast(1.2);
		box-shadow: inset 1px 1px 2px var(--color-text-main);
		font-weight: 700
	}

	button:disabled {
		opacity: 0.5;
		cursor: not-allowed
	}

	p {
		margin-top: var(--size-xxs);
		margin-bottom: var(--size-xxs);
		font-size: var(--size-sm);
	}

	.button-large {
		height: var(--size-lg);
	}

	strong {
		font-weight: 800;
	}

	@keyframes typing {

		100%,
		90% {
			width: 100%
		}
	}

	@keyframes caret {

		0%,
		100% {
			box-shadow: .66rem 0 0 transparent
		}

		50% {
			box-shadow: .66rem 0 0 var(--color-primary)
		}
	}

	.type {
		font-size: var(--size-sm);
		display: inline-flex;
		margin-left: 0.5rem;
	}

	.type span {
		height: var(--size-md);
		width: 0%;
		word-break: break-all;
		overflow: hidden;
		animation: caret .5s infinite steps(1), typing 2s linear infinite
	}

	.type span::before {
		content: " ";
		display: inline-block
	}

	@keyframes paths {
		0% {
			clip-path: polygon(0 43%, 83% 43%, 83% 22%, 23% 22%, 23% 24%, 91% 24%, 91% 26%, 18% 26%, 18% 83%, 29% 83%, 29% 17%, 41% 17%, 41% 39%, 18% 39%, 18% 82%, 54% 82%, 54% 88%, 19% 88%, 19% 4%, 39% 4%, 39% 14%, 76% 14%, 76% 52%, 23% 52%, 23% 35%, 19% 35%, 19% 8%, 36% 8%, 36% 31%, 73% 31%, 73% 16%, 1% 16%, 1% 56%, 50% 56%, 50% 8%)
		}

		5% {
			clip-path: polygon(0 29%, 44% 29%, 44% 83%, 94% 83%, 94% 56%, 11% 56%, 11% 64%, 94% 64%, 94% 70%, 88% 70%, 88% 32%, 18% 32%, 18% 96%, 10% 96%, 10% 62%, 9% 62%, 9% 84%, 68% 84%, 68% 50%, 52% 50%, 52% 55%, 35% 55%, 35% 87%, 25% 87%, 25% 39%, 15% 39%, 15% 88%, 52% 88%)
		}

		30% {
			clip-path: polygon(0 53%, 93% 53%, 93% 62%, 68% 62%, 68% 37%, 97% 37%, 97% 89%, 13% 89%, 13% 45%, 51% 45%, 51% 88%, 17% 88%, 17% 54%, 81% 54%, 81% 75%, 79% 75%, 79% 76%, 38% 76%, 38% 28%, 61% 28%, 61% 12%, 55% 12%, 55% 62%, 68% 62%, 68% 51%, 0 51%, 0 92%, 63% 92%, 63% 4%, 65% 4%)
		}

		45% {
			clip-path: polygon(0 33%, 2% 33%, 2% 69%, 58% 69%, 58% 94%, 55% 94%, 55% 25%, 33% 25%, 33% 85%, 16% 85%, 16% 19%, 5% 19%, 5% 20%, 79% 20%, 79% 96%, 93% 96%, 93% 50%, 5% 50%, 5% 74%, 55% 74%, 55% 57%, 96% 57%, 96% 59%, 87% 59%, 87% 65%, 82% 65%, 82% 39%, 63% 39%, 63% 92%, 4% 92%, 4% 36%, 24% 36%, 24% 70%, 1% 70%, 1% 43%, 15% 43%, 15% 28%, 23% 28%, 23% 71%, 90% 71%, 90% 86%, 97% 86%, 97% 1%, 60% 1%, 60% 67%, 71% 67%, 71% 91%, 17% 91%, 17% 14%, 39% 14%, 39% 30%, 58% 30%, 58% 11%, 52% 11%, 52% 83%, 68% 83%)
		}

		76% {
			clip-path: polygon(0 26%, 15% 26%, 15% 73%, 72% 73%, 72% 70%, 77% 70%, 77% 75%, 8% 75%, 8% 42%, 4% 42%, 4% 61%, 17% 61%, 17% 12%, 26% 12%, 26% 63%, 73% 63%, 73% 43%, 90% 43%, 90% 67%, 50% 67%, 50% 41%, 42% 41%, 42% 46%, 50% 46%, 50% 84%, 96% 84%, 96% 78%, 49% 78%, 49% 25%, 63% 25%, 63% 14%)
		}

		90% {
			clip-path: polygon(0 41%, 13% 41%, 13% 6%, 87% 6%, 87% 93%, 10% 93%, 10% 13%, 89% 13%, 89% 6%, 3% 6%, 3% 8%, 16% 8%, 16% 79%, 0 79%, 0 99%, 92% 99%, 92% 90%, 5% 90%, 5% 60%, 0 60%, 0 48%, 89% 48%, 89% 13%, 80% 13%, 80% 43%, 95% 43%, 95% 19%, 80% 19%, 80% 85%, 38% 85%, 38% 62%)
		}

		1%,
		33%,
		47%,
		7%,
		78%,
		93% {
			clip-path: none
		}
	}

	@keyframes subtle-glow-warble {
		0% {
			filter: brightness(100%) opacity(1) saturate(100%) contrast(100%)
		}

		25% {
			filter: brightness(105%) opacity(.95) saturate(105%) contrast(105%)
		}

		50% {
			filter: brightness(100%) opacity(1) saturate(100%) contrast(100%)
		}

		75% {
			filter: brightness(95%) opacity(1.05) saturate(95%) contrast(95%)
		}

		100% {
			filter: brightness(100%) opacity(1) saturate(100%) contrast(100%)
		}
	}

	.layers {
		position: relative
	}

	.layers::after,
	.layers::before {
		content: attr(data-text);
		position: absolute;
		width: 110%;
		z-index: -1
	}

	.layers::before {
		top: 10px;
		left: 15px;
		color: var(--color-primary)
	}

	.layers::after {
		top: 5px;
		left: -10px;
		color: var(--color-secondary)
	}

	.single-path {
		clip-path: polygon(0 12%, 53% 12%, 53% 26%, 25% 26%, 25% 86%, 31% 86%, 31% 0, 53% 0, 53% 84%, 92% 84%, 92% 82%, 70% 82%, 70% 29%, 78% 29%, 78% 65%, 69% 65%, 69% 66%, 77% 66%, 77% 45%, 85% 45%, 85% 26%, 97% 26%, 97% 28%, 84% 28%, 84% 34%, 54% 34%, 54% 89%, 30% 89%, 30% 58%, 83% 58%, 83% 5%, 68% 5%, 68% 36%, 62% 36%, 62% 1%, 12% 1%, 12% 34%, 60% 34%, 60% 57%, 98% 57%, 98% 83%, 1% 83%, 1% 53%, 91% 53%, 91% 84%, 8% 84%, 8% 83%, 4% 83%)
	}

	.paths {
		animation: paths 5s step-end infinite
	}

	@keyframes movement {
		0% {
			top: 0;
			left: -20px
		}

		15% {
			top: 10px;
			left: 10px
		}

		60% {
			top: 5px;
			left: -10px
		}

		75% {
			top: -5px;
			left: 20px
		}

		100% {
			top: 10px;
			left: 5px
		}
	}

	.movement {
		position: relative;
		animation: movement 8s step-end infinite
	}

	@keyframes opacity {
		0% {
			opacity: .1
		}

		5% {
			opacity: .7
		}

		30% {
			opacity: .4
		}

		45% {
			opacity: .6
		}

		76% {
			opacity: .4
		}

		90% {
			opacity: .8
		}

		1%,
		33%,
		47%,
		7%,
		78%,
		93% {
			opacity: 0
		}
	}

	.opacity {
		animation: opacity 5s step-end infinite
	}

	@keyframes font {
		0% {
			font-weight: 100;
			color: var(--color-primary);
			filter: blur(3px)
		}

		20% {
			font-weight: 500;
			color: var(--color-light);
			filter: blur(0)
		}

		50% {
			font-weight: 300;
			color: var(--color-accent-2);
			filter: blur(2px)
		}

		60% {
			font-weight: 700;
			color: var(--color-accent-1);
			filter: blur(0)
		}

		90% {
			font-weight: 500;
			color: var(--color-primary);
			filter: blur(6px)
		}
	}

	.font {
		animation: font 7s step-end infinite
	}

	.glitch {
		animation: paths 3s step-end infinite
	}

	.glitch::before {
		animation: paths 5s step-end infinite, opacity 5s step-end infinite, font 8s step-end infinite, movement 10s step-end infinite
	}

	.glitch::after {
		animation: paths 5s step-end infinite, opacity 5s step-end infinite, font 7s step-end infinite, movement 8s step-end infinite
	}

	.glitch-slow {
		animation: paths 10s step-end infinite
	}

	.glitch-slow::before {
		animation: paths 5s step-end infinite, opacity 5s step-end infinite, font 8s step-end infinite, movement 10s step-end infinite
	}

	.glitch-slow::after {
		animation: paths 5s step-end infinite, opacity 5s step-end infinite, font 7s step-end infinite, movement 8s step-end infinite
	}

	@keyframes fade-in {
		from {
			opacity: 0
		}

		to {
			opacity: 1
		}
	}

	.use-gpu-rendering {
		backface-visibility: hidden;
		perspective: 1000;
		transform: translateZ(0)
	}

	.text-link-button {
		color: var(--text-color);
		text-decoration: none;
		cursor: pointer;
		transition: text-indent .5s;
		font-size: var(--size-sm);
		background: 0 0;
		border: 0;
		text-shadow: 2px 2px 4px var(--shadow-opacity-color);
	}

	.text-link-button-spacer {
		margin-right: var(--size-xxs);
		margin-left: var(--size-xxs);
	}

	@media screen and (width <=640px) {
		.text-link-button {
			font-size: var(--size-sm);
		}

		.text-link-button-spacer {
			margin-right: var(--size-3xs);
			margin-left: var(--size-3xs);
		}
	}

	.text-link-button-selected {
		color: var(--color-primary);
		font-weight: bolder
	}

	.text-link-button:hover {
		color: var(--color-primary);
		text-shadow: var(--text-shadow-highlight);
		scale: 1.1;
	}

	.text-link-button:active {
		color: var(--color-secondary);
		scale: 0.95;
	}

	@media screen and (width <=640px) {
		.full-width-mobile {
			width: 100%
		}
	}

	.modal {
		display: flex;
		flex-direction: column;
		position: absolute;
		left: 0;
		top: 0;
		width: 50%;
		height: 50%;
		background: var(--color-light);
		border: var(--color-primary) var(--modal-border-width) solid;
		resize: both;
		z-index: 15;
		overflow: scroll auto;
		transition: bottom .5s;
		animation: fade-in .75s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
		box-shadow: var(--bow-shadow-top-level-element);
		border-radius: var(--user-border-radius-modal);
	}

	.share-modal {
		z-index: 400;
	}

	.title-actions-modal .modal-action-buttons {
		display: flex;
		flex-direction: row;
		flex-grow: 1;
		width: 30%;
		align-items: baseline;
	}

	.title-actions-modal .title-actions-modal-title {
		display: flex;
		flex-direction: row;
		flex-grow: 1;
		text-align: center;
		justify-content: center;
		align-items: center;
		width: 36.7%;
		font-size: var(--size-sm);
		font-weight: 800;
		;
	}

	.title-actions-modal .spacer {
		display: flex;
		flex-direction: row;
		flex-grow: 1;
		width: 33.333%
	}

	.modal-window-title {
		cursor: move;
		height: var(--size-lg);
		font-size: var(--size-md);
		position: sticky;
		display: flex;
		align-items: center;
		background-color: var(--color-accent-1);
		color: var(--color-text-main);
		justify-content: flex-start;
		border-bottom: var(--color-primary) 3px solid;
		animation: subtle-glow-warble 3s infinite ease-in-out;
		width: 100%;
	}

	.modal-window-title nav {
		z-index: 100
	}

	.modal-window-title:hover {
		background-color: var(--color-secondary)
	}

	.modal-title-button {
		width: var(--size-md);
		height: var(--size-md);
		display: flex;
		align-items: center;
		justify-content: center;
		margin-left: var(--size-xxs);
		background: transparent;
		max-width: fit-content;
		text-align: center;
		font-size: var(--size-sm);
	}
	@media screen and (width <=640px) {
		.modal-title-button {
			width: var(--size-lg);
			height: var(--size-lg);
			margin-left: var(--size-md);
		}
		}
	.modal-title-button:hover {
		background: var(--color-primary);
		filter: grayscale(0.1) brightness(1.1);
	}

	.modal-title-button:active {
		background: var(--color-primary);
	}

	.title-actions-modal h3 {
		text-align: left;
		margin-bottom: var(--size-xs)
	}

	.user-description {
		color: var(--color-text-main);
		font-size: var(--size-sm);
	}

	.user-description,
	.user-submitted {
		padding: var(--size-xs);
		margin-bottom: var(--size-sm);
		border: var(--color-primary) 1px solid;
		border-radius: var(--user-border-radius-modal);
	}

	.user-description:hover,
	.user-submitted:hover {
		box-shadow: var(--box-shadow-highlight-mild)
	}

	@media screen and (width <=1100px) {
		.modal-window-title {
			font-size: var(--size-xs)
		}
	}

	.modal-content {
		flex-grow: 1;
		max-width: 100%;
		overflow: auto scroll;
		background: var(--color-light);
		height: 100%;
	}

	.modal-content-post-share {
		display: flex;
		height: 100%;
		flex-direction: column;
		width: 100%;
		background: var(--color-light);
		align-items: flex-start;
		padding: var(--size-xs);
		font-size: var(--size-xs);
		overflow: unset;
	}

	.modal-content-post-share nav {
		font-size: var(--size-sm);
		margin-bottom: var(--size-xs)
	}

	.modal-content-post {
		padding: var(--size-xs);
		height: 100%;
		background: var(--color-light);
	}

	.story-summary-statistics {
		font-size: var(--size-sm);
		margin-bottom: var(--size-sm);
		text-align: center;
		margin-top: 0;
		font-style: italic;
	}

	.story-text {
		font-size: var(--size-sm);
		padding: 0 var(--size-xs);
	}

	.no-description-text {
		font-weight: lighter;
		padding: 0 var(--size-xs);
	}

	.modal-content-post h3 {
		text-align: center
	}

	.comment {
		font-size: var(--size-sm);
		padding: var(--size-xs);
		margin: var(--size-sm) var(--size-xs);
		border: var(--color-primary) 1px solid;
		background: var(--color-accent-2);
		min-width: 10vw;
		transition: all .5s;
		animation: fade-in .5s;
		border-radius: var(--user-border-radius-modal);
		line-height: 1.5;
	}

	.comment-by {
		font-size: var(--size-sm);
		font-weight: bolder;
	}

	@media screen and (width <640px) {
		.comment {
			min-width: 33vw
		}
	}

	.add-theme-modal-content p {
		font-size: var(--size-sm);
		margin: 0;
	}

	.add-theme-modal-content #error-outlet {
		margin-bottom: var(--size-sm);
		font-style: italic;
	}

	.comment:hover {
		box-shadow: var(--box-shadow-highlight-mild)
	}

	.title-content {
		height: var(--size-lg);
		display: flex;
		flex-direction: row;
		justify-content: flex-start;
		align-items: center;
		padding-left: var(--top-level-padding-side);
		background: var(--color-accent-1);
		width: 100%;
		z-index: 10;
		box-shadow: var(--bow-shadow-top-level-element);
	}
	@media screen and (width <=640px) {
		.title-content {
			height: var(--size-xl);
		}
		}
	.nav-buttons {
		justify-content: space-around;
		display: flex;
		flex-direction: row;
		align-items: baseline;
		width: 100%;
		margin-top: 3px;
	}

	.title-content:hover {
		background: var(--color-secondary)
	}

	.title-content h1 {
		margin: 0 var(--size-xxs) 0 0
	}

	.main-content {
		background-image: var(--background-linear-gradient);
		padding-left: var(--top-level-padding-side);
		padding-right: var(--top-level-padding-side);
		height: calc(100vh - var(--size-lg));
		max-height: calc(100vh - var(--size-lg));
		overflow-y: scroll
	}

	.main-content>section {
		transition: all .5s;
		animation: fade-in .5s
	}

	.item-title-preview {
		margin-top: var(--size-xxs);
		margin-bottom: var(--size-xxs);
		text-rendering: optimizespeed;
		box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 1px -2px, rgba(0, 0, 0, 0.3) 0px 3px 2px -3px;
	}

	.item-title-preview span {
		color: var(--color-text-main);
		font-size: var(--size-sm);
		cursor: pointer;
		margin: 0.2rem;
	}

	.item-title-preview span:hover {
		color: transparent;
		font-weight: 700;
		text-indent: var(--size-xs);
		transition: text-indent .5s;
		text-shadow: var(--text-shadow-highlight)
	}

	.item-title-preview span:hover::before {
		display: inline-block;
		content: "->"
	}

	#settings-outlet {
		padding-left: var(--size-xxs);
		padding-right: var(--size-xxs);
		padding-top: var(--size-xxs);
		animation: fade-in .5s;

		@media screen and (width <=640px) {
			#settings-outlet {
				padding-left: var(--size-xs);
				padding-top: var(--size-xs)
			}
		}
	}

	.adjust-theme-content {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		justify-content: left;
		padding-top: var(--size-xxs);
		animation: fade-in .5s;
		width: 25vw;
		min-width: fit-content;
	}

	#settings-outlet p,
	ol,
	li {
		font-size: var(--size-sm);
	}

	#settings-outlet strong {
		color: var(--color-primary);
	}

	.setting-element {
		width: 100%;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-between;
		padding: var(--size-xxs)
	}

	.setting-element:hover {
		background: var(--color-secondary)
	}

	.setting-name {
		min-width: var(--size-xxl);
		flex-grow: 1;
	}

	.setting-new-value-input {
		background: 0 0;
		border: 0
	}

	.setting-apply-button,
	.setting-reset-button {
		height: var(--size-md)
	}

	.adjust-theme-content button {
		margin-left: var(--size-xs)
	}

	#settings-outlet input {
		height: var(--size-md);
		margin-top: var(--size-xxs);
		margin-bottom: var(--size-xxs);
	}

	.setting-buttons-row {
		display: flex;
		flex-wrap: wrap;
	}

	.setting-buttons-row button {
		margin: var(--size-xxs) var(--size-xxs) 0 0;
	}

	.add-theme-modal {
		display: flex;
		flex-direction: column;
	}

	.add-theme-modal .modal-content {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	.add-theme-modal-content #download-code {
		height: var(--size-lg);
		padding: var(--size-xs);
		margin-top: var(--size-sm);
		margin-bottom: var(--size-sm);
	}

	.add-theme-modal-content {
		display: flex;
		flex-direction: column;
	}

	.add-theme-modal #add-theme-button {
		/* background: var(--color-primary);
		color: var(--color-secondary); */
	}

	#theme-applied-outlet {
		padding-left: var(--size-xxs);
		font-weight: bold;
	}

	.modal-about-site {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: flex-start;
		padding: 0 var(--size-md);
		height: 100%;
	}

	.other-theme-setting {
		display: flex;
		flex-direction: column;
		align-items: left;
		max-width: 33vw;
		margin-bottom: var(--size-sm);
	}

	.other-theme-setting label {
		font-weight: 700;
	}

	@media screen and (width <=640px) {
		.other-theme-setting {
			max-width: 100%;
		}
	}

	.other-theme-setting .settings-button-row {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}

	.other-theme-setting .settings-button-row button {
		width: 49%
	}

	.button-row {
		display: flex;
		width: 100%;
		flex-direction: row;
		justify-content: space-between;
		align-items: center;
	}

	.button-row button {
		flex-grow: 1;
		margin: var(--size-xxs);
		width: 100%;
	}

	@media screen and (width <=640px) {
		.button-row {
			flex-direction: column
		}
	}

	.about-modal p {
		margin-top: var(--size-xs);
		margin-bottom: var(--size-xs);
		font-size: var(--size-sm);
	}

	.loading-comments {
		margin: var(--size-lg) 0;
		display: block;
	}

	.full-width {
		width: 100%;
	}
</style>
<!-- Constants -->
<script type="text/javascript">
	const YCOMBINATOR_URL = "https://news.ycombinator.com/"
	const HACKER_NEWS_API_URL = "https://hacker-news.firebaseio.com/v0/"
	const TOTAL_ANIMATION_STRINGS = 100
	const LOADING_STRING_MIN_LENGTH = 5
	const LOADING_STRING_MAX_LENGTH_MOBILE = 25
	const LOADING_STRING_MAX_LENGTH_DESKTOP = 80
	const MOBILE_DEVICE_MAX_WIDTH = 640
	const LOADING_STORY_ANIMATION_REFRESH_INTERVAL_MINIMUM = 250
	const LOADING_STORY_ANIMATION_REFRESH_INTERVAL_MAXIMUM = 2_000
	const LOADING_ANIMATION_NUMBER_OF_ROWS = 50
	const MODAL_POSITION_RANDOM_OFFSET = 20
	const MODAL_FULL_SIZE_WITH_BORDER_COMPUTATION_HEIGHT = "100%"
	const MODAL_FULL_SIZE_WITH_BORDER_COMPUTATION_WIDTH = "100%"
	const DESKTOP_MODAL_DEFAULT_SIZE = "50%"
	const DESKTOP_MODAL_DEFAULT_POSITION = 25
	const MODAL_MAXIMIZATION_THRESHOLD = 0.9
	const DOUBLE_TAP_THRESHOLD = 200

	const ANIMATION_CHARACTERS_STRING =
		"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+=-[]{}|;:,.<>?♥♦♣♠•◘○◆☻☺♂♀♪♫☼►◄↕‼¶§▬↨↑↓→←∟↔▲▼ァアィイゥウェエォオカガキギクゲゴサザシジスゼソゾタダチヂッツヅテデトドナニヌネノハバパヒビピフブプヘベペホボポマミムメモャユョヨラリルレロヮワヰヱヲン々〆〤￥「」『』【】〒〓─━│┃┄┅┆┇┈┉┊┋┌┍┎┏┐┑┒┓└┕┖┗┘┙┚┛├┝┞┟┠┡┢┣┤┥┦┧┨┩┪┫┬┭┮┯┰┱┲┳┴┵┶┷┸┹┺┻┼┽┾┿╀╁╂╃╄╅╆╇╈╉╊╋╌╍╎╏═║╒╓╔╕╖╗╘╙╚╛╜╝╞╟╠╡╢╣╤╥╦╧╨╩╪╫╬§¶☊☋☌☍ΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩαβγδεζηθικλμνξοπρςστυφχψω←↑→↓↔↕↖↗↘↙↚↛↜↝↞↟↠↡↢↣↤↥↦↧↨↩↪↫↬↭↮↯↰↱↲↳↴↵↶↷↸↹↺↻↼↽↾↿⇀⇁⇂⇃⇄⇅⇆⇇⇈⇉⇊⇋⇌⇍⇎⇏⇐⇑⇒⇓⇔⇕⇖⇗⇘⇙⇚⇛⇜⇝⇞⇟⇠⇡⇢⇣⇤⇥⇦⇧⇨⇩⇪⌨"


</script>
<!-- Error handling -->
<script type="text/javascript">
	/**
	 * Logs an error to the console user support instructions
	 * @param {Error} error
	 * @param {string} message
	 */
	function logError(error = {}, message = "N/A") {
		console.error(`RUNTIME ERROR
Error string: "${error.toString()}""
Error JSON: "${JSON.stringify(error, null, 2)}"

Other message: "${message}""`)
		console.error(error)
	}
</script>
<!-- API -->
<script type="text/javascript">
	/**
	 * Fetches data from the Hacker News API with loading animation displayed
	 * on main content
	 * @param {string} url
	 * @returns {Promise}
	 */
	async function getRequestWithLoadingAnimation(url) {
		showLoadingAnimation()
		let response
		try {
			response = await fetch(url)
			if (!response.ok)
				throw new Error(`HTTP error! status: ${response.status}`)
		} catch (error) {
			logError(error, "Error fetching data from Hacker News API")
			hideLoadingAnimation()
			throw error
		} finally {
			hideLoadingAnimation()
		}

		return response.json()
	}

	/**
	 * Regarding the Hacker News API:
	 * Stories, comments, jobs, Ask HNs and even polls are just items. They're
	 * identified by their ids, which are unique integers, and live under
	 * /v0/item/<id>.
	 *
	 * All items have some of the following properties:
	 * [Field]  [Description]
	 * id	      The item's unique id.
	 * deleted	True if the item is deleted.
	 * type    	The type of item. One of "job", "story", "comment", "poll", or "pollopt".
	 * by	      The username of the item's author.
	 * time	    Creation date of the item, in Unix Time.
	 * text    	The comment, story or poll text. HTML.
	 * dead	    true if the item is dead.
	 * parent  	The comment's parent: either another comment or the relevant story.
	 * poll	    The pollopt's associated poll.
	 * kids	    The ids of the item's comments, in ranked display order.
	 * url     	The URL of the story.
	 * score	  The story's score, or the votes for a pollopt.
	 * title	  The title of the story, poll or job. HTML.
	 * parts	  A list of related pollopts, in display order.
	 *
	 * For example, see: https://hacker-news.firebaseio.com/v0/item/8863.json?print=pretty
	 * for an example of a post.
	 * 
	 * See more info about the Hacker News API: https://github.com/HackerNews/API
	 */

	const API = {
		topStories: () =>
			getRequestWithLoadingAnimation(`${HACKER_NEWS_API_URL}topstories.json`),
		newStories: () =>
			getRequestWithLoadingAnimation(`${HACKER_NEWS_API_URL}newstories.json`),
		bestStories: () =>
			getRequestWithLoadingAnimation(
				`${HACKER_NEWS_API_URL}beststories.json`
			),
		askStories: () =>
			getRequestWithLoadingAnimation(`${HACKER_NEWS_API_URL}askstories.json`),
		showStories: () =>
			getRequestWithLoadingAnimation(
				`${HACKER_NEWS_API_URL}showstories.json`
			),
		jobStories: () =>
			getRequestWithLoadingAnimation(`${HACKER_NEWS_API_URL}jobstories.json`),
		item: (id) => {
			return fetch(`${HACKER_NEWS_API_URL}item/${id}.json`)
				.then((response) => response.json())
				.catch((error) => logError(error, `Error fetching item ${id}`))
		},
		user: (id) => {
			return fetch(`${HACKER_NEWS_API_URL}user/${id}.json`)
				.then((response) => response.json())
				.catch((error) => logError(error, `Error fetching user ${id}`))
		},
	};
</script>
<!-- Utils -->
<script type="text/javascript">
	const _$refs = {}

	/**
	 * Returns a reference to a DOM element with caching if it has been accessed
	 * previously. This should only be used for high level elements not expected 
	 * to change or re-render.
	 * @param {string} query
	 * @returns {HTMLElement}
	 */
	function $ref(query) {
		if (query in _$refs) return _$refs[query]
		const ref = document.querySelector(query)
		_$refs[query] = ref
		return ref
	}

	/**
	 * Loop utility, does `callback` `times` times
	 * @param {number} times
	 * @param {function} callback
	 * @returns {void}
	 */
	const loop = (times, callback) => {
		for (let i = 0; i < times; i++) {
			callback(i)
		}
	}

	/*
	 * Standard Date format
	 * @param {number} timePosted as Unix Time in seconds
	 * @returns {string}
	 */
	function formatDate(timePosted) {
		const date = new Date(timePosted * 1000)
		const year = date.getFullYear()
		const month = String(date.getMonth() + 1).padStart(2, "0") // JavaScript months are 0-based.
		const day = String(date.getDate()).padStart(2, "0")
		const hours = String(date.getHours()).padStart(2, "0")
		const minutes = String(date.getMinutes()).padStart(2, "0")
		const seconds = String(date.getSeconds()).padStart(2, "0")

		// Make sure to avoid Y10K bugs
		return `0${year}:${month}:${day}:${hours}:${minutes}:${seconds}`
	}

	/**
	 * Downloads a string as a CSV file
	 * @param {string} str
	 * @returns {void}
	 */
	function downloadStringAsCSV(str) {
		const blob = new Blob([str], { type: "text/csv" })
		const url = URL.createObjectURL(blob)
		const a = document.createElement("a")
		a.href =
			url
		a.download = "data.csv"
		document.body.appendChild(a)
		a.click()
		URL.revokeObjectURL(url)
	}

	/**
	 * Returns a random number between `min` and `max`
	 * @param {number} min
	 * @param {number} max
	 * @returns {number}
	 */
	const getRandomNumberBetween = (min, max) =>
		Math.floor(Math.random() * (max - min + 1) + min)

	/** 
	 * Returns true of in mobile sized screen 
	 * @returns {boolean}
	 */
	const isMobileDevice = () => window.innerWidth < MOBILE_DEVICE_MAX_WIDTH

	/**
	 * Utility for handling state and side effects, listening for changes
	 * @param {any} initialState
	 * @param {function} sideEffect
	 * @returns {object}
	 */
	function reactive(initialState, sideEffect) {
		let state = initialState
		const current = () => state

		const update = (newState) => {
			state = newState
			sideEffect(state)
		}

		const observers = []
		const subscribe = (observer) => observers.push(observer)

		const notify = () => {
			observers.forEach((observer) => observer(state))
		}

		return {
			current,
			update,
			subscribe,
			notify,
		}
	}

	const _parser = new DOMParser()

	/**
	 * Utility for sanitizing external HTML content for malicious scripts
	 * @param {string} html
	 * @returns {string}
	 */
	function sanitize(html) {
		const doc = _parser.parseFromString(html, "text/html")

		// Remove script tags
		doc.querySelectorAll("script").forEach((script) => script.remove())

		// Sanitize attributes
		const elements = doc.body.getElementsByTagName("*")
		for (let i = 0; i < elements.length; i++) {
			const attrs = elements[i].attributes
			for (let j = attrs.length - 1; j >= 0; j--) {
				const attrName = attrs[j].name.toLowerCase()
				const attrValue = attrs[j].value.toLowerCase()
				if (attrName.startsWith("on") || attrValue.includes("javascript:")) {
					elements[i].removeAttribute(attrs[j].name)
				}
			}
		}

		return doc.body.innerHTML
	}



	/**
	 * Downloads a JSON object as a file
	 * @param {string} url
	 * @returns {void}
	 */
	function downloadJSONAsFile(json, filename = "data.json") {
		const data = JSON.stringify(json, null, 2)
		const blob = new Blob([data], { type: "application/json" })
		const url = URL.createObjectURL(blob)
		const a = document.createElement("a")
		a.href = url
		a.download = filename
		a.click()
		URL.revokeObjectURL(url)
	}

	/**
	 * Incept all link click events and make sure they open in a new tab
	 * @returns {void}
	 */
	function initLinkClickInterceptBehavior() {
		document.body.addEventListener("click", function (e) {
			// Check if the clicked element is a link or inside a link
			let target = e.target
			while (target != null && target.tagName !== "A") {
				target = target.parentElement
			}

			// If a link was clicked
			if (target && target.tagName === "A") {
				// Check if it's an external link or you want to force it to open in a new tab
				if (
					target.getAttribute("href") &&
					(target.getAttribute("href").startsWith("http") ||
						target.getAttribute("target") === "_blank")
				) {
					e.preventDefault() // Prevent default link behavior
					// Check for data-allow-external="true"
					if (target.getAttribute("data-allow-external") === "true")
						return window.open(target.href, "_blank")
					new LinkModal(target.href)
				}
			}
		})
	}
</script>
<!-- Favorites -->
<script>
	/*
	 * Favorites are stored in localStorage as an array of story IDs
	 * Each story ID is a number
	 * @returns {Array<number>}
	 */
	const getFavorites = () =>
		JSON.parse(localStorage.getItem("favorites")) || []

	/*
	 * Set the favorites in localStorage
	 * @param {Array<number>} favorites
	 * @returns {void}
	 */
	const setFavorites = (favorites) =>
		localStorage.setItem("favorites", JSON.stringify(favorites))

	/*
	 * Check if a story is favorited
	 * @param {number} storyId
	 * @returns {boolean}
	 */
	const isStoryFavorited = (storyId) => getFavorites().includes(storyId)

	/*
	 * Render the favorites from local storage on the DOM
	 * @returns {HTMLElement}
	 */
	function renderFavorites() {
		const favoriteStoriesElement =
			document.querySelector("#favorites-outlet")
		favoriteStoriesElement.innerHTML = ""
		const fragment = document.createDocumentFragment()
		getFavorites().forEach((storyId) => {
			fragment.appendChild(new StoryListElement(storyId, true))
		})
		favoriteStoriesElement.appendChild(fragment)
		return favoriteStoriesElement
	}

	/*
	 * Favorite a story by ID
	 * @param {number} storyId
	 * @returns {void}
	 */
	function favoriteStory(storyId) {
		const favorites = getFavorites()
		if (favorites.includes(storyId)) return
		favorites.push(storyId)
		setFavorites(favorites)
		renderFavorites()
	}

	/*
	 * Unfavorite a story by ID
	 * @param {number} storyId
	 * @returns {void}
	 */
	function unfavoriteStory(storyId) {
		setFavorites(getFavorites().filter((id) => id !== storyId))
		renderFavorites()
	}

	/*
	 * Clear all favorites from local storage
	 * @returns {void}
	 */
	function clearAllFavorites() {
		setFavorites([])
		renderFavorites()
	}

	/*
	 * Download saved stories as a CSV
	 * @returns {void}
	 */
	const downloadFavorites = () =>
		downloadStringAsCSV(
			getFavorites()
				.map(id => `${YCOMBINATOR_URL}item?id=${id}`)
				.join("\r\n"));


</script>
<!-- Settings -->
<script type="text/javascript">
	const SETTINGS = {
		COLOR_PRIMARY: "--color-primary",
		COLOR_SECONDARY: "--color-secondary",
		COLOR_ACCENT_1: "--color-accent-1",
		COLOR_ACCENT_2: "--color-accent-2",
		COLOR_DARK: "--color-dark",
		COLOR_LIGHT: "--color-light",
		COLOR_TEXT_MAIN: "--color-text-main",
	}

	const themes = {
		default: {
			"name": "default",
			"--color-primary": "#132054",
			"--color-secondary": "#ffed00",
			"--color-accent-1": "#f6d365",
			"--color-accent-2": "#fda085",
			"--color-dark": "#3c3c3c",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#2f4f4f",
		},
		"dream-pop": {
			"name": "dream-pop",
			"--color-primary": "#ff77aa",
			"--color-secondary": "#cc99ff",
			"--color-accent-1": "#ff99ee",
			"--color-accent-2": "#d1b3ff",
			"--color-dark": "#342a4e",
			"--color-light": "#fff0f5",
			"--color-text-main": "##808080",
		},
		hippie: {
			"name": "hippie",
			"--color-primary": "#fabd2f",
			"--color-secondary": "#d3869b",
			"--color-accent-1": "#83a598",
			"--color-accent-2": "#b8bb26",
			"--color-dark": "#282828",
			"--color-light": "#ebdbb2",
			"--color-text-main": "#996b00",
		},
		"neon-concrete": {
			"name": "neon-concrete",
			"--color-primary": "#00D9FF",
			"--color-secondary": "#FF007F",
			"--color-accent-1": "#8C8C8C",
			"--color-accent-2": "#9A9A9A",
			"--color-dark": "#1A1A1A",
			"--color-light": "#E5E5E5",
			"--color-text-main": "#757575",
		},
		solarpunk: {
			"name": "solarpunk",
			"--color-primary": "#ff8c00",
			"--color-secondary": "#7ec850",
			"--color-accent-1": "#ffd700",
			"--color-accent-2": "#40e0d0",
			"--color-dark": "#005a51",
			"--color-light": "#f0f8ff",
			"--color-text-main": "#3c6e71",
		},
		hyperreality: {
			"name": "hyperreality",
			"--color-primary": "#00ff00",
			"--color-secondary": "#000000",
			"--color-accent-1": "#1A1A1A",
			"--color-accent-2": "#333333",
			"--color-dark": "#0a0a0a",
			"--color-light": "#9A9A9A",
			"--color-text-main": "#00ff00",
		},
		"cybernetic-dream": {
			"name": "cybernetic-dream",
			"--color-primary": "#00D1B2",
			"--color-secondary": "#FF3860",
			"--color-accent-1": "#3273DC",
			"--color-accent-2": "#F5F5F5",
			"--color-dark": "#363636",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#4A4A4A",
		},
		"petal-dream": {
			"name": "petal-dream",
			"--color-primary": "#F78FB3",
			"--color-secondary": "#CF9FFF",
			"--color-accent-1": "#A4DEFF",
			"--color-accent-2": "#FFD670",
			"--color-dark": "#7E5475",
			"--color-light": "#ffdbe1",
			"--color-text-main": "#e85995",
		},
		"neo-tokyo": {
			"name": "neo-tokyo",
			"--color-primary": "#DC143C",
			"--color-secondary": "#FFC0CB",
			"--color-accent-1": "#87CEEB",
			"--color-accent-2": "#32CD32",
			"--color-dark": "#00008B",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#2F4F4F",
		},
		china: {
			"name": "china",
			"--color-primary": "#A80000",
			"--color-secondary": "#FFD700",
			"--color-accent-1": "#00A86B",
			"--color-accent-2": "#8B4513",
			"--color-dark": "#000000",
			"--color-light": "#FFFAF0",
			"--color-text-main": "#363636",
		},
		"sakura-matsuri": {
			"name": "sakura-matsuri",
			"--color-primary": "#FF69B4",
			"--color-secondary": "#FFD700",
			"--color-accent-1": "#FF6347",
			"--color-accent-2": "#FF1493",
			"--color-dark": "#000000",
			"--color-light": "#FFFAF0",
			"--color-text-main": "#363636",
		},
		"sao-paulo": {
			"name": "sao-paulo",
			"--color-primary": "#FFD700",
			"--color-secondary": "#C0C0C0",
			"--color-accent-1": "#008000",
			"--color-accent-2": "#A52A2A",
			"--color-dark": "#333333",
			"--color-light": "#F0F0F0",
			"--color-text-main": "#000000",
		},
		lagos: {
			"name": "lagos",
			"--color-primary": "#4DB848",
			"--color-secondary": "#FFC107",
			"--color-accent-1": "#00ACC1",
			"--color-accent-2": "#E91E63",
			"--color-dark": "#263238",
			"--color-light": "#E0E0E0",
			"--color-text-main": "#2b6b00",
		},
		nyc: {
			"name": "nyc",
			"--color-primary": "#4d4d4d",
			"--color-secondary": "#999999",
			"--color-accent-1": "#b3b3b3",
			"--color-accent-2": "#e6e6e6",
			"--color-dark": "#333333",
			"--color-light": "#f2f2f2",
			"--color-text-main": "#1a1a1a",
		},
		greyscale: {
			"name": "greyscale",
			"--color-primary": "#0a0a0a",
			"--color-secondary": "#bfbfbf",
			"--color-accent-1": "#d9d9d9",
			"--color-accent-2": "#bfbfbf",
			"--color-dark": "#050505",
			"--color-light": "#ffffff",
			"--color-text-main": "#0a0a0a",
		},
		washington: {
			"name": "washington",
			"--color-primary": "#B22234",
			"--color-secondary": "#3C3B6E",
			"--color-accent-1": "#FFFFFF",
			"--color-accent-2": "#F0EDEE",
			"--color-dark": "#212529",
			"--color-light": "#F0E68C",
			"--color-text-main": "#002D62",
		},
		rainbow: {
			"name": "rainbow",
			"--color-primary": "#FF69B4",
			"--color-secondary": "#00BFFF",
			"--color-accent-1": "#FFD700",
			"--color-accent-2": "#32CD32",
			"--color-dark": "#8B008B",
			"--color-light": "#F0E68C",
			"--color-text-main": "#2F4F4F",
		},
		miami: {
			"name": "miami",
			"--color-primary": "#ff9f1c",
			"--color-secondary": "#2ec4b6",
			"--color-accent-1": "#ffbf69",
			"--color-accent-2": "#cbf3f0",
			"--color-dark": "#011627",
			"--color-light": "#fdfffc",
			"--color-text-main": "#011627",
		},
		"neo-vegas": {
			"name": "neo-vegas",
			"--color-primary": "#ff4500",
			"--color-secondary": "#ffd700",
			"--color-accent-1": "#008b8b",
			"--color-accent-2": "#8b4513",
			"--color-dark": "#282828",
			"--color-light": "#f0e68c",
			"--color-text-main": "#5c0075",
		},
		moto: {
			"name": "moto",
			"--color-primary": "#FF0000",
			"--color-secondary": "#211E1E",
			"--color-accent-1": "#087E8B",
			"--color-accent-2": "#F2C641",
			"--color-dark": "#0B3C5D",
			"--color-light": "#E0E1DD",
			"--color-text-main": "#ff0000",
		},
		delhi: {
			"name": "delhi",
			"--color-primary": "#C8102E",
			"--color-secondary": "#FFD700",
			"--color-accent-1": "#008000",
			"--color-accent-2": "#FFFFFF",
			"--color-dark": "#4B5320",
			"--color-light": "#FADA5E",
			"--color-text-main": "#000000",
		},
		"cyber-citrus": {
			"name": "cyber-citrus",
			"--color-primary": "#FF8C00",
			"--color-secondary": "#FFD700",
			"--color-accent-1": "#9C4F00",
			"--color-accent-2": "#FFA500",
			"--color-dark": "#2F4F4F",
			"--color-light": "#fff266",
			"--color-text-main": "#664b00",
		},
		noir: {
			"name": "noir",
			"--color-primary": "#303030",
			"--color-secondary": "#0a0a0a",
			"--color-accent-1": "#262626",
			"--color-accent-2": "#333333",
			"--color-dark": "#000000",
			"--color-light": "#141414",
			"--color-text-main": "#575757",
		},
		vaporwave: {
			"name": "vaporwave",
			"--color-primary": "#ff71ce",
			"--color-secondary": "#01cdfe",
			"--color-accent-1": "#05ffa1",
			"--color-accent-2": "#b967ff",
			"--color-dark": "#21094e",
			"--color-light": "#e0c3fc",
			"--color-text-main": "#ffffff",
		},
		fuji: {
			"name": "fuji",
			"--color-primary": "#FFC0CB",
			"--color-secondary": "#ADD8E6",
			"--color-accent-1": "#FFFFFF",
			"--color-accent-2": "#B0E0E6",
			"--color-dark": "#778899",
			"--color-light": "#FFF0F5",
			"--color-text-main": "#2F4F4F",
		},

		y2k: {
			"name": "y2k",
			"--color-primary": "#00FF00",
			"--color-secondary": "#FF69B4",
			"--color-accent-1": "#0000FF",
			"--color-accent-2": "#FFD700",
			"--color-dark": "#000080",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#000000",
		},
		"pastel-goth": {
			"name": "pastel-goth",
			"--color-primary": "#8A4F7D",
			"--color-secondary": "#4A4063",
			"--color-accent-1": "#F4BEEE",
			"--color-accent-2": "#9E768F",
			"--color-dark": "#22223B",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#4A4A4A",
		},
		scene: {
			"name": "scene",
			"--color-primary": "#35465C",
			"--color-secondary": "#A77DC2",
			"--color-accent-1": "#58C9B9",
			"--color-accent-2": "#F4ACB7",
			"--color-dark": "#263238",
			"--color-light": "#ECEFF1",
			"--color-text-main": "#b25ed9",
		},
		sleeze: {
			"name": "sleeze",
			"--color-primary": "#C2185B",
			"--color-secondary": "#00E5FF",
			"--color-accent-1": "#CDDC39",
			"--color-accent-2": "#FFEB3B",
			"--color-dark": "#212121",
			"--color-light": "#F5F5F5",
			"--color-text-main": "#ad8800",
		},
		plastic: {
			"name": "plastic",
			"--color-primary": "#13CA91",
			"--color-secondary": "#FF48C4",
			"--color-accent-1": "#00B2FF",
			"--color-accent-2": "#FFEB3B",
			"--color-dark": "#6A1B9A",
			"--color-light": "#B2F2EF",
			"--color-text-main": "#cc8b00",
		},
		zine: {
			"name": "zine",
			"--color-primary": "#F4D03F",
			"--color-secondary": "#E74C3C",
			"--color-accent-1": "#3498DB",
			"--color-accent-2": "#2ECC71",
			"--color-dark": "#34495E",
			"--color-light": "#ECF0F1",
			"--color-text-main": "#2C3E50",
		},
		away: {
			"name": "away",
			"--color-primary": "#8A2BE2",
			"--color-secondary": "#DEB887",
			"--color-accent-1": "#FF69B4",
			"--color-accent-2": "#00FF7F",
			"--color-dark": "#000080",
			"--color-light": "#F5F5DC",
			"--color-text-main": "#000000",
		},
		space: {
			"name": "space",
			"--color-primary": "#3B5998",
			"--color-secondary": "#D9E6F2",
			"--color-accent-1": "#FF4500",
			"--color-accent-2": "#FFD700",
			"--color-dark": "#333333",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#000000",
		},
		irc: {
			"name": "irc",
			"--color-primary": "#0C7BDC",
			"--color-secondary": "#E1E8ED",
			"--color-accent-1": "#F44336",
			"--color-accent-2": "#FFEB3B",
			"--color-dark": "#37474F",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#212121",
		},
		bbs: {
			"name": "bbs",
			"--color-primary": "#00FF00",
			"--color-secondary": "#000000",
			"--color-accent-1": "#FFFF00",
			"--color-accent-2": "#FF00FF",
			"--color-dark": "#FFFFFF",
			"--color-light": "#008000",
			"--color-text-main": "#FFFFFF",
		},
		psyc: {
			"name": "psyc",
			"--color-primary": "#DF00FF",
			"--color-secondary": "#FFD700",
			"--color-accent-1": "#00FF00",
			"--color-accent-2": "#FF007F",
			"--color-dark": "#0000FF",
			"--color-light": "#FFA500",
			"--color-text-main": "#FFFFFF",
		},
		1984: {
			"name": "1984",
			"--color-primary": "#00A0D6",
			"--color-secondary": "#FF0090",
			"--color-accent-1": "#08F7FE",
			"--color-accent-2": "#FE53BB",
			"--color-dark": "#020122",
			"--color-light": "#F5F5F5",
			"--color-text-main": "#333333",
		},
		board: {
			"name": "board",
			"--color-primary": "#E94E77",
			"--color-secondary": "#0CDBD3",
			"--color-accent-1": "#FCF300",
			"--color-accent-2": "#66FF00",
			"--color-dark": "#202020",
			"--color-light": "#F8F8F8",
			"--color-text-main": "#202020",
		},
		korea: {
			"name": "korea",
			"--color-primary": "#d22630",
			"--color-secondary": "#003478",
			"--color-accent-1": "#fcc419",
			"--color-accent-2": "#6799ff",
			"--color-dark": "#2e2e2e",
			"--color-light": "#f3f3f3",
			"--color-text-main": "#101010",
		},
		1999: {
			"name": "1999",
			"--color-primary": "#00C3FF",
			"--color-secondary": "#FC28FB",
			"--color-accent-1": "#D0C310",
			"--color-accent-2": "#0CFEFE",
			"--color-dark": "#050505",
			"--color-light": "#F0F0F0",
			"--color-text-main": "#ff47a0;",
		},
		y10k: {
			"name": "y10k",
			"--color-primary": "#0a0f0d",
			"--color-secondary": "#1c3b3a",
			"--color-accent-1": "#4a7070",
			"--color-accent-2": "#729595",
			"--color-dark": "#050708",
			"--color-light": "#cfd8dc",
			"--color-text-main": "#00444d",
		},
		"space-age": {
			"name": "space-age",
			"--color-primary": "#0b3d91",
			"--color-secondary": "#ffffff",
			"--color-accent-1": "#ff6f61",
			"--color-accent-2": "#ffd700",
			"--color-dark": "#000080",
			"--color-light": "#f8f9fa",
			"--color-text-main": "595959;",
		},

		"eliptic-curve": {
			"name": "eliptic-curve",
			"--color-primary": "#d4d41c",
			"--color-secondary": "#CB99C9",
			"--color-accent-1": "#FFBCD9",
			"--color-accent-2": "#A2A2D0",
			"--color-dark": "#000000",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#4B0082",
		},
		"exit-node": {
			"name": "exit-node",
			"--color-primary": "#8B0000",
			"--color-secondary": "#FF4500",
			"--color-accent-1": "#ff2600",
			"--color-accent-2": "#ad0000",
			"--color-dark": "#ff0000",
			"--color-light": "#ff0000",
			"--color-text-main": "#ecdfdf",
		},
		salmon: {
			"name": "salmon",
			"--color-primary": "#FF9A8A",
			"--color-secondary": "#FFD1AC",
			"--color-accent-1": "#FFB4A2",
			"--color-accent-2": "#E29587",
			"--color-dark": "#C6726B",
			"--color-light": "#FFF0E3",
			"--color-text-main": "#5C3A4D",
		},
		qubit: {
			"name": "qubit",
			"--color-primary": "#0C7C59",
			"--color-secondary": "#FF6B6B",
			"--color-accent-1": "#FFE66D",
			"--color-accent-2": "#4ECDC4",
			"--color-dark": "#253031",
			"--color-light": "#F7FFF7",
			"--color-text-main": "#00a300",
		},
		"san-francisco": {
			"name": "san-francisco",
			"--color-primary": "#FFA500",
			"--color-secondary": "#FFD700",
			"--color-accent-1": "#008080",
			"--color-accent-2": "#DA70D6",
			"--color-dark": "#696969",
			"--color-light": "#F5F5F5",
			"--color-text-main": "#000000",
		},
		"los-angeles": {
			"name": "los-angeles",
			"--color-primary": "#FFCC00",
			"--color-secondary": "#C0C0C0",
			"--color-accent-1": "#00AEEF",
			"--color-accent-2": "#FF6E4A",
			"--color-dark": "#2D2D2D",
			"--color-light": "#FFFFFF",
			"--color-text-main": "#000000",
		},
		hash: {
			"name": "hash",
			"--color-primary": "#FF00FF",
			"--color-secondary": "#00FF00",
			"--color-accent-1": "#FFFF00",
			"--color-accent-2": "#00FFFF",
			"--color-dark": "#FF4500",
			"--color-light": "#7F00FF",
			"--color-text-main": "#c2c2c2",
		},
		"block-cipher": {
			"name": "block-cipher",
			"--color-primary": "#00FF00",
			"--color-secondary": "#00FF00",
			"--color-accent-1": "#F57C13",
			"--color-accent-2": "#F57C13",
			"--color-dark": "#C0C0C0",
			"--color-light": "#FFFF00",
			"--color-text-main": "#000000",
		}
	}



	/**
	 * Convert RGBA color string to HEX color string
	 * @param {string} rgba
	 * @returns {string}
	 */
	const convertToHexString = (rgba) => {
		const [r, g, b, a] = rgba
			.substring(5, rgba.length - 1)
			.replace(/ /g, "")
			.split(",")
		return `#${parseInt(r).toString(16)}${parseInt(g).toString(16)}${parseInt(
			b
		).toString(16)}`
	}

	/**
	 * Convert color string in HEX <OR> RGBA format to HEX color string
	 * @param {string} string
	 * @returns {string}
	 */
	const asColorSelectorInputValue = (string) => {
		if (string.startsWith("#")) return string
		return convertToHexString(string)
	}

	/**
	 * Return current value of CSS variable
	 */
	const getCSSVariable = (variable) =>
		getComputedStyle(document.documentElement).getPropertyValue(variable)

	/**
	 * Set CSS variable `variable` to `value`
	 */
	const setCSSVariable = (variable, value) =>
		document.documentElement.style.setProperty(variable, value)

	/**
	 * Load current CSS settings from local storage and apply them to the document
	 * @returns {void}
	 */
	const loadSettingsFromLocalStorage = () => {
		Object.entries(SETTINGS).forEach(([_, value]) => {
			const storedValue = localStorage.getItem(value)
			if (storedValue) {
				setCSSVariable(value, storedValue)
			}
		})
	}

	/**
	 * Save setting to local storage
	 * @param {string} setting
	 * @param {string} value
	 * @returns {void}
	 */
	const saveSettingToLocalStorage = (setting, value) => {
		localStorage.setItem(setting, value)
	}

	/**
	 * Apply theme setting to document and save preference in local storage
	 */
	const changeSetting = (setting, value) => {
		setCSSVariable(setting, value)
		saveSettingToLocalStorage(setting, value)
	}

	/**
	 * Update setting input with current value
	 * @param {string} setting
	 * @returns {void}
	 */
	const updateColorSettingInputWithCurrentValue = (setting) => {
		document.querySelector(`#setting-input${setting}`).value =
			asColorSelectorInputValue(getCSSVariable(setting))
	}

	/**
	 * Reset setting to default value
	 * @param {string} setting
	 * @returns {void}
	 */
	const resetColorSetting = (setting) => {
		changeSetting(setting, themes[getCurrentThemeCode()][setting])
		updateColorSettingInputWithCurrentValue(setting)
	}

	/**
	 * Download current color theme as JSON file
	 * @returns {void}
	 */
	const downloadCurrentColorTheme = () => {
		const theme = {}
		Object.entries(SETTINGS).forEach(([_, value]) => {
			theme[value] = getCSSVariable(value)
		})
		downloadJSONAsFile(theme, "theme.json")
	}

	/**
	 * Returns the code of currently applied theme
	 * @returns {string}
	 */
	const getCurrentThemeCode = () => {
		const currentThemeCode = localStorage.getItem("currentThemeCode")
		if (currentThemeCode) return currentThemeCode
		return "default"
	}

	/**
	 * Update current theme code in local storage
	 * @param {string} themeCode
	 * @returns {void}
	 */
	const setCurrentThemeCode = (themeCode) => localStorage.setItem("currentThemeCode", themeCode)

	/**
	 * The display name of the currently applied theme
	 * @returns {void}
	 */
	const getCurrentThemeDisplayName = () => {
		const currentThemeCode = getCurrentThemeCode()
		return document.querySelector(`#button-theme-${currentThemeCode}`).innerHTML
	}

	/**
	 * Render the name of the applied theme to the theming section in settings page
	 * @returns {void}
	 */
	const renderThemeAppliedText = () => {
		document.querySelector("#theme-applied-outlet").innerHTML = `Current theme: ${getCurrentThemeDisplayName()}`
		document.querySelector("#theme-applied-outlet").display = "block"
	}

	/**
	 * Returns all user installed themes
	 * @returns {void}
	 */
	const getAddedThemes = () => {
		const addedThemes = localStorage.getItem("addedThemes")
		if (addedThemes) {
			return JSON.parse(addedThemes)
		}
		return {}
	}

	/**
	 * Add new theme to user installed themes by saving in local storage
	 * @param {object} theme
	 * @returns {void}
	 */
	const addAddedTheme = (theme) => {
		const addedThemes = getAddedThemes()
		addedThemes[theme.name] = theme
		localStorage.setItem("addedThemes", JSON.stringify(addedThemes))
	}


	/**
	 * Renders buttons that allow to apply all user added themes
	 * @returns {void}
	 */
	function renderAddedThemes() {
		$ref("#added-themes-outlet").innerHTML = ""
		const addedThemes = getAddedThemes()

		if (Object.keys(addedThemes).length === 0) {
			$ref("#added-themes-outlet").innerHTML = "No added themes"
			document.querySelector("#remove-added-themes-button").style.display = "none"
			return
		}

		document.querySelector("#remove-added-themes-button").style.display = "block"

	}



	const NON_COLOR_SETTINGS = {
		USER_BORDER_RADIUS_MODAL: "--user-border-radius-modal",
		USER_BORDER_RADIUS_BUTTON: "--user-border-radius-button",
		USER_FONT: "--user-font",
	}

	const NON_COLOR_SETTINGS_DEFAULT_VALUES = {
		"--user-border-radius-modal": "4px",
		"--user-border-radius-button": "2px",
		"--user-font": "DIN Web Pro, Helvetica, Arial, sans-serif;",
	};

</script>
<!-- Navigation -->
<script type="text/javascript">
	/**
	 * Navigation options
	 */
	const NAVIGATION_OPTIONS = {
		TOP: "top",
		NEW: "new",
		BEST: "best",
		ASK: "ask",
		SHOW: "show",
		JOB: "job",
	}

	/**
	 * Updates the DOM for the selected section
	 * @param {string} option
	 * @returns {void}
	 */
	function updateDOMForNavigationOption(option) {
		Object.entries(NAVIGATION_OPTIONS).forEach(([_, value]) => {
			if (value === option) {
				$ref(`#nav-button-${value}`)
					.classList.add("text-link-button-selected")
			} else {
				$ref(`#nav-button-${value}`)
					.classList.remove("text-link-button-selected")
			}
			$ref(`#${value}-outlet`).style.display =
				value === option ? "block" : "none"
		})
	}

	/**
	 * Sets `modal` on top of other modals with z-index
	 * @param {HTMLElement} modal
	 * @param {boolean} delay
	 * @returns {void}
	 */
	function setModalOnTop(modal, delay = true) {
		const activeModals = Array.from(
			document.querySelectorAll(".modal")
		)
		activeModals.forEach((m) => m.style.zIndex = "99")

		// The click event from another modal will set itself on top so delay is
		// needed to ensure the modal is on top.
		if (delay) {
			setTimeout(() => {
				modal.style.zIndex = "200"
			}, 100)
			return
		}

		modal.style.zIndex = "200"
	}

	/**
	 * Adds modal tiling behavior to modal
	 * @param {HTMLElement} modal
	 * @returns {void}
	 */
	const useModalTilingBehavior = (modal) =>
		modal.addEventListener("click", () =>
			setModalOnTop(modal, false)
		)

	/**
	 * Launch modals corresponding to search params in URL
	 */
	function launchModalsFromNavigationParams() {
		const currentURL = new URL(window.location.href)

		const storyModalIdList = currentURL.searchParams.get("storyModalIdList")
		if (storyModalIdList) {
			const storyIds = storyModalIdList.split(",")
			storyIds.forEach((storyId) => {
				API.item(storyId).then((story) => new StoryModal(story))
			})
		}

		const profileModalIdList =
			currentURL.searchParams.get("profileModalIdList")
		if (profileModalIdList) {
			const profileIds = profileModalIdList.split(",")
			profileIds.forEach((profileId) => {
				new UserModal(profileId)
			})
		}
	}

	/**
	 * Adds story modal to URL search params
	 * @param {number} storyId
	 * @returns {void}
	 */
	function addStoryModalToURL(storyId) {
		const currentURL = new URL(window.location.href)
		const currentStoryModalIdList =
			currentURL.searchParams.get("storyModalIdList")

		if (currentStoryModalIdList) {
			if (!currentStoryModalIdList.split(",").includes(storyId.toString())) {
				currentURL.searchParams.set(
					"storyModalIdList",
					`${currentStoryModalIdList},${storyId}`
				)
			}
		} else {
			currentURL.searchParams.set("storyModalIdList", storyId)
		}
		window.history.pushState({}, "", currentURL)
	}

	/**
	 * Removes story modal from URL search params
	 * @param {number} storyId
	 * @returns {void}
	 */
	function removeStoryModalFromURL(storyId) {
		const currentURL = new URL(window.location.href)

		const currentStoryModalIdList =
			currentURL.searchParams.get("storyModalIdList")

		if (currentStoryModalIdList) {
			const storyIds = currentStoryModalIdList.split(",")
			const newStoryIds = storyIds.filter((id) => id !== storyId.toString())
			if (newStoryIds.length > 0) {
				currentURL.searchParams.set(
					"storyModalIdList",
					newStoryIds.join(",")
				)
			} else {
				currentURL.searchParams.delete("storyModalIdList")
			}
		}
		window.history.pushState({}, "", currentURL)
	}

	/**
	 * Adds profile modal to URL search params
	 * @param {number} profileId
	 * @returns {void}
	 */
	function addProfileModalToURL(profileId) {
		const currentURL = new URL(window.location.href)
		const currentProfileModalIdList =
			currentURL.searchParams.get("profileModalIdList")

		if (currentProfileModalIdList) {
			if (
				!currentProfileModalIdList.split(",").includes(profileId.toString())
			) {
				currentURL.searchParams.set(
					"profileModalIdList",
					`${currentProfileModalIdList},${profileId}`
				)
			}
		} else {
			currentURL.searchParams.set("profileModalIdList", profileId)
		}
		window.history.pushState({}, "", currentURL)
	}

	/**
	 * Removes profile modal from URL search params
	 * @param {number} profileId
	 * @returns {void}
	 */
	function removeProfileModalFromURL(profileId) {
		const currentURL = new URL(window.location.href)

		const currentProfileModalIdList =
			currentURL.searchParams.get("profileModalIdList")

		if (currentProfileModalIdList) {
			const profileIds = currentProfileModalIdList.split(",")
			const newProfileIds = profileIds.filter(
				(id) => id !== profileId.toString()
			)
			if (newProfileIds.length > 0) {
				currentURL.searchParams.set(
					"profileModalIdList",
					newProfileIds.join(",")
				)
			} else {
				currentURL.searchParams.delete("profileModalIdList")
			}
		}
		window.history.pushState({}, "", currentURL)
	}

	/**
	 * Attaches click listeners to navigation buttons
	 * @returns {void}
	 */
	function attachNavigationButtonClickListeners() {
		Object.entries(NAVIGATION_OPTIONS).forEach(([_, value]) => {
			$ref(`#nav-button-${value}`)
				.addEventListener("click", () => {
					navigationState.update(value)
				})
		})
	}

	/**
	 * Trigger initial page render corresponding to navigation state
	 * @returns {void}
	 */
	function applyInitialNavigationState() {
		const currentURL = new URL(window.location.href)
		const currentPath = currentURL.pathname.split("/").pop()
		if (Object.values(NAVIGATION_OPTIONS).includes(currentPath)) {
			navigationState.update(currentPath)
		} else {
			navigationState.update(NAVIGATION_OPTIONS.TOP)
		}
	}

	/**
	 * Apply current navigation state to window history
	 */
	function applyCurrentNavigationStateToURL() {
		const currentURL = new URL(window.location.href)
		const currentPath = currentURL.pathname.split("/").pop()
		currentURL.pathname = `/${navigationState.current()}`
		window.history.pushState({}, "", currentURL)
	}
</script>
<!-- Animations -->
<script type="text/javascript">
	/**
	 * Makes a modal draggable
	 * @param {HTMLElement} element
	 * @returns {void}
	 */
	function useModalDragBehavior(element) {
		if (isMobileDevice()) {
			element.style.position = "fixed"
			return
		}

		let mousePosition1 = 0,
			mousePosition2 = 0,
			mousePosition3 = 0,
			mousePosition4 = 0

		let touchPosition1 = 0,
			touchPosition2 = 0,
			touchPosition3 = 0,
			touchPosition4 = 0

		const modalTitleElement = element.querySelector(".modal-window-title")

		// Handle drag functionality from touch screen
		modalTitleElement.addEventListener("touchstart", (event) => {
			// Make sure this ignores events from nav buttons
			if (event.target.tagName === "BUTTON") {
				// Propagate click event to button and handle normally
				// TODO: handle this bug better, the touch event overrides button
				// events in modals
				// NOTE: the css z-index behavior may have fixed this
				event.target.click()
				return
			}

			touchPosition3 = event.changedTouches[0].clientX
			touchPosition4 = event.changedTouches[0].clientY
		})
		modalTitleElement.addEventListener("touchend", () => {
			touchPosition1 = 0
			touchPosition2 = 0
			touchPosition3 = 0
			touchPosition4 = 0
		})
		modalTitleElement.addEventListener("touchcancel", () => {
			touchPosition1 = 0
			touchPosition2 = 0
			touchPosition3 = 0
			touchPosition4 = 0
		})
		modalTitleElement.addEventListener("touchmove", (event) => {
			event.preventDefault()
			touchPosition1 = touchPosition3 - event.changedTouches[0].clientX
			touchPosition2 = touchPosition4 - event.changedTouches[0].clientY
			touchPosition3 = event.changedTouches[0].clientX
			touchPosition4 = event.changedTouches[0].clientY

			// Make sure modal doesn't go above screen
			if (element.offsetTop - touchPosition2 < 0) {
				touchPosition2 = 0
			}

			// Make sure modal doesn't go left of screen
			if (element.offsetLeft - touchPosition1 < 0) {
				touchPosition1 = 0
			}

			// Make sure modal doesn't go right of screen
			if (element.offsetLeft - touchPosition1 + element.offsetWidth > window.innerWidth) {
				touchPosition1 = 0
			}

			// Make sure modal doesn't go below screen
			if (element.offsetTop - touchPosition2 + element.offsetHeight > window.innerHeight) {
				touchPosition2 = 0
			}

			element.style.top = element.offsetTop - touchPosition2 + "px"
			element.style.left = element.offsetLeft - touchPosition1 + "px"
		})

		// Handle Drag Functionality from mouse
		modalTitleElement.onmousedown = dragMouseDown
		modalTitleElement.ontouchstart = dragMouseDown

		function dragMouseDown(e) {
			e = e || window.event
			e.preventDefault()
			// Get the mouse cursor position at startup:
			mousePosition3 = e.clientX
			mousePosition4 = e.clientY
			document.onmouseup = closeMouseDragElement
			// Call a function whenever the cursor moves:
			document.onmousemove = mouseElementDrag
		}

		function mouseElementDrag(e) {
			e = e || window.event
			e.preventDefault()
			// Calculate the new cursor position:
			mousePosition1 = mousePosition3 - e.clientX
			mousePosition2 = mousePosition4 - e.clientY
			mousePosition3 = e.clientX
			mousePosition4 = e.clientY

			// Make sure modal doesn't go above screen
			if (element.offsetTop - mousePosition2 < 0) {
				mousePosition2 = 0
			}

			// Make sure modal doesn't go left of screen
			if (element.offsetLeft - mousePosition1 < 0) {
				mousePosition1 = 0
			}

			// Make sure modal doesn't go right of screen
			if (element.offsetLeft - mousePosition1 + element.offsetWidth > window.innerWidth) {
				mousePosition1 = 0
			}

			// Make sure modal doesn't go below screen
			if (element.offsetTop - mousePosition2 + element.offsetHeight > window.innerHeight) {
				mousePosition2 = 0
			}

			element.style.top = element.offsetTop - mousePosition2 + "px"
			element.style.left = element.offsetLeft - mousePosition1 + "px"
		}

		function closeMouseDragElement() {
			// Stop moving when mouse button is released:
			document.onmouseup = null
			document.onmousemove = null
		}
	}

	/**
	 * Scrolls to the top of the page
	 * @returns {void}
	 */
	function scrollToTop() {
		$ref("body").scrollIntoView({ behavior: "smooth" })
	}

	/**
	 * Shows the loading animation
	 * @returns {void}
	 */
	function showLoadingAnimation() {
		scrollToTop()
		$ref("#loading-outlet").style.display = "block"
	}

	/**
	 * Hides the loading animation
	 * @returns {void}
	 */
	function hideLoadingAnimation() {
		scrollToTop()
		$ref("#loading-outlet").style.display = "none"
	}

	/**
	 * Generates a random loading string with length `length` from
	 * `ANIMATION_CHARACTERS_STRING` character set.
	 * @param {number} length
	 * @returns {string}
	 */
	function generateLoadingString(length) {
		// Use for loop over map for performance
		let result = ""
		for (let i = 0; i < length; i++) {
			result += ANIMATION_CHARACTERS_STRING.charAt(
				Math.floor(Math.random() * ANIMATION_CHARACTERS_STRING.length)
			)
		}
		return result
	}

	/**
	 * Pre-computes loading strings for the loading animation
	 * @returns {Promise<string[]>}
	 */
	async function precomputeLoadingStrings() {
		// Use for loop over map for performance
		const loadingStrings = []
		for (let i = 0; i < TOTAL_ANIMATION_STRINGS; i++) {
			loadingStrings.push(
				generateLoadingString(
					Math.random() *
					((isMobileDevice()
						? LOADING_STRING_MAX_LENGTH_MOBILE
						: LOADING_STRING_MAX_LENGTH_DESKTOP) -
						LOADING_STRING_MIN_LENGTH) +
					LOADING_STRING_MIN_LENGTH
				)
			)
		}
		return loadingStrings
	}

	/**
	 * Returns a random loading string
	 * @returns {string}
	 */
	const getRandomLoadingString = () =>
		loadingStrings[Math.floor(Math.random() * TOTAL_ANIMATION_STRINGS)]

	/**
	 * Initializes the loading animation
	 * @returns {void}
	 * TODO have generic function for batch DOM inserts
	 */
	function initializeLoadingAnimation() {
		const fragment = document.createDocumentFragment()
		loop(LOADING_ANIMATION_NUMBER_OF_ROWS, (i) =>
			fragment.append(new LoadingStoryElement())
		)
		$ref("#loading-outlet").appendChild(fragment)
	}
</script>
<!-- Custom Elements -->
<script type="text/javascript">
	/**
	 * Cache of callbacks to load stories into elements so that they are only
	 * loaded as brought into view.
	 */
	const storyElementLoadingCallbacks = {}

	/**
	 * Handle sizing of modal according to screen width
	 * @param {HTMLElement} modal
	 * @param {string} height
	 * @param {string} width
	 * @returns {void}
	 * TODO: refactor because these params aren't needed
	 */
	function handleModalSizing(
		modal,
		height = undefined,
		width = undefined,
		top = undefined,
		left = undefined
	) {
		if (isMobileDevice()) {
			modal.style.height =
				height || MODAL_FULL_SIZE_WITH_BORDER_COMPUTATION_HEIGHT
			modal.style.width =
				width || MODAL_FULL_SIZE_WITH_BORDER_COMPUTATION_WIDTH
			modal.style.top = top || "0"
			modal.style.left = left || "0"
		} else {
			modal.style.height = height || DESKTOP_MODAL_DEFAULT_SIZE
			modal.style.width = width || DESKTOP_MODAL_DEFAULT_SIZE

			modal.style.top =
				top || DESKTOP_MODAL_DEFAULT_POSITION +
				getRandomNumberBetween(
					-MODAL_POSITION_RANDOM_OFFSET,
					MODAL_POSITION_RANDOM_OFFSET
				) +
				"%"

			modal.style.left =
				left || DESKTOP_MODAL_DEFAULT_POSITION +
				getRandomNumberBetween(
					-MODAL_POSITION_RANDOM_OFFSET,
					MODAL_POSITION_RANDOM_OFFSET
				) +
				"%"
		}
	}

	/**
	 * Maximize modal to take up the entire screen
	 * @param {HTMLElement} modal
	 * @returns {void}
	 */
	function maximizeModal(modal) {
		modal.style.height =
			MODAL_FULL_SIZE_WITH_BORDER_COMPUTATION_HEIGHT
		modal.style.width =
			MODAL_FULL_SIZE_WITH_BORDER_COMPUTATION_WIDTH
		modal.style.top = "0"
		modal.style.left = "0"
	}

	/**
	 * Return true if a modal takes up over 90% of the screen
	 * @param {HTMLElement} modal
	 * @returns {boolean}
	 */
	function isModalMaximized(modal) {
		const rect = modal.getBoundingClientRect()
		return (
			rect.width > window.innerWidth * MODAL_MAXIMIZATION_THRESHOLD ||
			rect.height > window.innerHeight * MODAL_MAXIMIZATION_THRESHOLD
		)
	}

	/**
	 * Markup for modal close button
	 * @returns {string}
	 */
	const MODAL_CLOSE_BUTTON_STRING =
		"<button id=\"close-button\" class=\"modal-title-button\" title=\"Close Modal\"><i class=\"material-icons\"> close</i></button>"

	/**
	 * Markup for modal maximize button
	 * @returns {string}
	 */
	const MODAL_MAXIMIZE_BUTTON_STRING =
		"<button id=\"maximize-button\" class=\"modal-title-button\" title=\"Toggle Full Screen\"><i class=\"material-icons\"> add</i></button>"

	/**
	 * Markup for modal open link button
	 * @returns {string}
	 */
	const MODAL_OPEN_LINK_BUTTON_STRING =
		"<button id=\"open-link-button\" class=\"modal-title-button\" title='Open In New Tab'><i class=\"material-icons\">file_upload</i></button>"

	/**
	 * Markup for modal share button
	 * @returns {string}
	 */
	const MODAL_SHARE_BUTTON_STRING =
		"<button id=\"share-button\" class=\"modal-title-button\" title='Share'><i class=\"material-icons\">share</i></button>"

	const MODAL_REFRESH_BUTTON_STRING =
		"<button id=\"refresh-button\" class=\"modal-title-button\" title='Refresh'><i class=\"material-icons\">refresh</i></button>"



	const LOADING_INDICATOR_ELEMENT_STRING = "<span id=\"loading-comments\" class=\"type\"><span>Loading...</span></span>"

	/**
	 * Double tap on modal header to resize
	 * @param {HTMLElement} modal
	 * @returns {void}
	 */
	function useModalHeaderDoubleTapResize(modal) {
		modal
			.querySelector(".modal-window-title")
			.addEventListener("dblclick", () => {
				if (isModalMaximized(modal)) {
					handleModalSizing(modal)
				} else {
					maximizeModal(modal)
				}
			})

		// Now add click event for double tap from touch screens
		let lastTouch = 0

		modal
			.querySelector(".modal-window-title")
			.addEventListener("touchstart", () => {
				const now = new Date().getTime()
				const timeSinceLastTouch = now - lastTouch
				if (timeSinceLastTouch < DOUBLE_TAP_THRESHOLD && timeSinceLastTouch > 0) {
					if (isModalMaximized(modal)) {
						handleModalSizing(modal)
					} else {
						maximizeModal(modal)
					}
				}
				lastTouch = now
			})
	}

	/**
	 * Toggle between full and default size on click
	 * @param {HTMLElement} modal
	 * @param {function} callback
	 * @returns {void}
	 */
	function useModalHeaderMaximizeButtonBehavior(modal, callback = undefined) {
		if (!isMobileDevice()) {
			modal
				.querySelector("#maximize-button")
				.addEventListener("click", () => {
					if (isModalMaximized(modal)) {
						handleModalSizing(modal)
					} else {
						maximizeModal(modal)
					}
					if (callback) callback()
				})
		}
	}

	/**
	 * Close modal and remove from DOM on click
	 * @param {HTMLElement} modal
	 * @param {function} callback
	 * @returns {void}
	 */
	function useModalHeaderCloseButtonBehavior(modal, callback = undefined) {
		modal
			.querySelector("#close-button")
			.addEventListener("click", () => {
				modal.remove()
				storiesOpen = false
				if (callback) callback()
			})

	}

	/**
	 * Open Share modal on click
	 * @param {HTMLElement} modal
	 * @returns {void}
	 */
	function useModalHeaderShareButtonBehavior(modal, callback = undefined) {
		modal
			.querySelector("#share-button")
			.addEventListener("click", () => {
				new ShareModal()
				if (callback) callback()
			})
	}

	/**
	 * Modal for social sharing
	 * @returns {HTMLElement}
	 */
	function ShareModal() {
		let modalContainer = document.querySelector(".modal-content")

		let iframe = modalContainer.querySelector("iframe")

		let iframeId = iframe ? iframe.id : 'No iframe found'
		let cleanId = iframeId.split('story-iframe-')[1]
		let cleanLink = `https://news.ycombinator.com/item?id=${cleanId}`
		console.log(cleanLink)
		const modal = document.createElement("div")
		modal.classList.add(
			"share-modal",
			"modal",
			"title-actions-modal",
			"use-gpu-rendering",
		)

		modal.innerHTML = `
      <header class="modal-window-title" role="dialog" aria-modal="true">
        <div class="modal-action-buttons">
          ${MODAL_CLOSE_BUTTON_STRING}
          ${!isMobileDevice() ? MODAL_MAXIMIZE_BUTTON_STRING : ""}
        </div>
        <div class="title-actions-modal-title">Share</div>
        <div class="spacer"></div>
      </header>
      <main class="modal-content">
        <div class="modal-content-post-share">
					<a href="${cleanLink}", target ="_blank">${cleanLink}</a>
        </div>
      </main>
      `

		useModalHeaderDoubleTapResize(modal)
		if (isMobileDevice()) {
			handleModalSizing(modal, "40%", MODAL_FULL_SIZE_WITH_BORDER_COMPUTATION_WIDTH, "30%", "0")
		} else {
			handleModalSizing(modal, "33vh", "33vh")
		}

		useModalHeaderCloseButtonBehavior(modal)
		useModalHeaderMaximizeButtonBehavior(modal)
		useModalDragBehavior(modal)
		useModalTilingBehavior(modal)

		document.body.appendChild(modal)
		setModalOnTop(modal)

		return modal
	}



	/**
	 * Element for comments on items/stories
	 * @param {object} story
	 * @returns {HTMLElement}
	 */
	function CommentListElement(item) {
		const commentContainer = document.createElement("div")
		commentContainer.id = item.id
		commentContainer.classList.add("comment-container")

		commentContainer.innerHTML = `<div class="comment">
        <a id="parent-comment" class="comment-by">In Thread</a>
        <p class="comment-text">${sanitize(item.text) || "[DELETED]"}</p>
        </div>`

		if (item.parent) {
			commentContainer
				.querySelector("#parent-comment")
				.addEventListener("click", () =>
					API.item(item.parent).then((parentItem) =>
						new StoryModal(parentItem)
					)
				)
		}

		return commentContainer
	}

	const userProfileItemCallbacks = {}

	/*
	 * Element for items submitted by a user.
	 * Will render comment items for submitted comments, and story items for submitted stories.
	 * @param {number} itemId
	 * @returns {HTMLElement}
	 */
	function UserSubmittedItemElement(itemId) {
		const storyContainer = document.createElement("div")
		storyContainer.id = itemId
		storyContainer.classList.add("profile-item-container")

		storyContainer.innerHTML = `<span>${getRandomLoadingString()}</span>`

		const loadItem = () => {
			API.item(itemId)
				.then(async (item) => {
					storyContainer.innerHTML = ""
					if (
						item.type === "story" ||
						item.type === "job" ||
						item.type === "poll" ||
						item.type === "pollopt"
					) {
						storyContainer.appendChild(
							new StoryListElement(itemId, true, item)
						)
					} else if (item.type === "comment") {
						storyContainer.appendChild(new CommentListElement(item))
					} else {
						storyContainer.innerHTML = "Eᴙᴙ0ᴙ..."
					}
				})
				.catch((error) => {
					logError(error, `Error loading user submitted item ${itemId}`)
					storyContainer.firstChild.textContent = "Eᴙᴙ0ᴙ..."
				})
		}

		userProfileItemCallbacks[itemId] = loadItem

		return storyContainer
	}

	/**
	 * Story list element for a Hacker News story/item
	 * @param {number} storyId
	 * @param {boolean} loadContentImmediately
	 * @returns {HTMLElement}
	 */
	function StoryListElement(
		storyId,
		loadContentImmediately = false,
		storyPreloaded = undefined
	) {
		const storyContainer = document.createElement("div")
		storyContainer.id = storyId
		storyContainer.classList.add("item-title-preview")

		// Assign random string for loading effect
		storyContainer.innerHTML = `<span>${getRandomLoadingString()}}</span>`

		const render = (story) => {
			if (story.deleted) {
				storyContainer.innerHTML = "<span>[DELETED]</span>"
				return
			}

			if (story.dead) {
				storyContainer.innerHTML = "<span>[DEAD]</span>"
				return
			}

			if (story.title === undefined) {
				story.title = "[NO TITLE]"
			}
			storyContainer.innerHTML = `<span>${sanitize(story.title)}</span>`
			storyContainer.addEventListener("click", () => new StoryModal(story))
		}

		const loadStory = () => {
			API.item(storyId)
				.then(async (story) => render(story))
				.catch((error) => {
					logError(error, `Error loading story ${storyId}`)
					storyContainer.firstChild.textContent = "Eᴙᴙ0ᴙ..."
				})
		}

		if (loadContentImmediately && !storyPreloaded) loadStory()

		if (storyPreloaded) render(storyPreloaded)

		storyElementLoadingCallbacks[storyId] = loadStory

		return storyContainer
	}

	/**
	 * Modal for a Hacker News user and items/stories/comments they have submitted
	 * @param {object} story
	 * @returns {HTMLElement}
	 */
	function UserModal(userId) {
		const modal = document.createElement("div")
		modal.classList.add("modal", "title-actions-modal", "use-gpu-rendering")

		modal.innerHTML = `<header class="modal-window-title" role="dialog" aria-modal="true">
        <div class="modal-action-buttons">
          ${MODAL_CLOSE_BUTTON_STRING}
          ${!isMobileDevice() ? MODAL_MAXIMIZE_BUTTON_STRING : ""}
		  ${MODAL_SHARE_BUTTON_STRING}
		  ${MODAL_REFRESH_BUTTON_STRING}
        </div>
        <title class="title-actions-modal-title">${userId}</title>
        <div class="spacer"></div>
      </header>

      <main class="modal-content">
        <section id="modal-content-post-${userId}" class="modal-content-post">
          <div class="user-details">
            <span class="type"><span>Loading...</span></span>
          </div>
        </section>
      </main>`

		handleModalSizing(modal)

		useModalTilingBehavior(modal)
		useModalHeaderCloseButtonBehavior(modal, () => removeProfileModalFromURL(userId))
		useModalHeaderDoubleTapResize(modal)
		useModalHeaderMaximizeButtonBehavior(modal)
		useModalDragBehavior(modal)
		useModalHeaderShareButtonBehavior(modal)

		const render = () => {

			API.user(userId).then((user) => {
				const userDetails = modal.querySelector(".user-details")
				userDetails.innerHTML = `<div class="user-description">
            <strong>JOINED:</strong> ${formatDate(user.created)}
            <br />
            <strong>KARMA:</strong> ${user.karma || 0}
            <br />
            ${user.about ? `<p>${sanitize(user.about)}</p> ` : ""}
        </div>

        <div class="user-submitted">
          <strong>SUBMITTED(${user.submitted.length}):</strong>
        </div>
        `

				const userSubmitted = userDetails.querySelector(".user-submitted")
				user.submitted.forEach((storyId) => {
					userSubmitted.appendChild(new UserSubmittedItemElement(storyId))
				})

				// Load items as they come into view. Users can have submitted 
				// thousands of items so this needs to be throttled
				const submittedStoriesObserver = new IntersectionObserver(
					(entries) => {
						entries.forEach((entry) => {
							if (entry.isIntersecting) {
								const storyId = entry.target.id
								if (userProfileItemCallbacks[storyId]) {
									userProfileItemCallbacks[storyId]()
									delete userProfileItemCallbacks[storyId]
								}
							}
						})
					},
					{ rootMargin: "0px 0px 100px 0px" }
				)

				userSubmitted
					.querySelectorAll(".profile-item-container")
					.forEach((story) => {
						submittedStoriesObserver.observe(story)
					})
			})

		}

		modal.querySelector("#refresh-button").addEventListener("click", render)
		render()

		addProfileModalToURL(userId)
		document.body.appendChild(modal)
		setModalOnTop(modal)

		return modal
	}


	/**
	 * Modal that shows iframe of a link that a user clicked on in other modal
	 * regarding the link.
	 * @param {string} url
	 * @returns {HTMLElement}
	 */
	function LinkModal(url) {

		const modal = document.createElement("div")
		modal.classList.add(
			"modal",
			"use-gpu-rendering",
			"link-modal",
			"title-actions-modal"
		)

		modal.innerHTML = `<header class="modal-window-title" role="dialog" aria-modal="true">
		${MODAL_CLOSE_BUTTON_STRING}
        ${!isMobileDevice() ? MODAL_MAXIMIZE_BUTTON_STRING : ""}
		${MODAL_OPEN_LINK_BUTTON_STRING}
        ${MODAL_SHARE_BUTTON_STRING}
      </header>

      <main class="modal-content">
        <iframe id="link-iframe" src="${url}"></iframe>
      </main>`

		useModalTilingBehavior(modal)
		handleModalSizing(modal)
		useModalHeaderDoubleTapResize(modal)
		useModalDragBehavior(modal)
		useModalHeaderCloseButtonBehavior(modal)
		useModalHeaderMaximizeButtonBehavior(modal)
		useModalHeaderShareButtonBehavior(modal)

		modal.querySelector("#open-link-button").addEventListener("click", () =>
			window.open(url, "_blank")
		)

		document.body.appendChild(modal)
		setModalOnTop(modal)

		return modal
	}

	/**
	 * Modal that shows iframe of hacker news story and perform other actions
	 * regarding story.
	 * @param {object} story
	 * @returns {HTMLElement}
	 */
	 let storiesOpen = false
	function StoryModal(story) {
if (storiesOpen) return
		const modal = document.createElement("div")
		modal.classList.add("modal", "use-gpu-rendering", "title-actions-modal")

		const getStorySummaryStatisticsInnerContent = (story) =>
			`<a class="user-id">${story.by}</a> | ${formatDate(story.time)} | ⧫ ${story.score
			|| 0} | 💬 ${story.descendants || 0} ${story.parent ? "| <a id=\"parent-comment\">In Thread</a>" : ""
			}`


		modal.innerHTML = `<header class="modal-window-title" role="dialog" aria-modal="true">
		<div class="modal-action-buttons">
		${MODAL_CLOSE_BUTTON_STRING}
        </nav>
        ${!isMobileDevice() ? MODAL_MAXIMIZE_BUTTON_STRING : ""}
		${MODAL_OPEN_LINK_BUTTON_STRING}
        ${MODAL_SHARE_BUTTON_STRING}
        ${story.url
				? "<button id=\"toggle-url-or-post-button\" class=\"modal-title-button\" title=\"Toggle Webpage Preview or Hacker News Post\"><i class=\"material-icons\">preview</i></button>"
				: ""


			}
		${MODAL_REFRESH_BUTTON_STRING}
		</div>
      </header>

      <main class="modal-content">
          <iframe id="story-iframe-${story.id}" src="${story.url
			}" style="display:none;"></iframe>
          <section id="modal-content-post-${story.id
			}" class="modal-content-post">
            ${story.title ? `<h3>${sanitize(story.title)}</h3>` : ""}
            <p class="story-summary-statistics">
              ${getStorySummaryStatisticsInnerContent(story)}
            </p>
            ${story.text
				? `<div class="story-text">${sanitize(story.text)}</div>`
				: "<div class=\"no-description-text\">No description, click 🖥️ to read here or ⬆️ to read in new tab.</div>"
			}
            <div class="comments">
              ${story.kids ? LOADING_INDICATOR_ELEMENT_STRING : "<p class=\"story-text\">No comments about this item yet,  click 🔄 above to refresh comments.</p>"}
            </div>
          </section>
      </main>`

		handleModalSizing(modal)
		useModalHeaderDoubleTapResize(modal)
		useModalDragBehavior(modal)

		useModalTilingBehavior(modal)
		useModalHeaderCloseButtonBehavior(modal, () => removeStoryModalFromURL(story.id))
		useModalHeaderMaximizeButtonBehavior(modal)
		useModalHeaderShareButtonBehavior(modal)

		modal
			.querySelector("#open-link-button")
			.addEventListener("click", () => window.open(story.url, "_blank"))

		if (story.url) {
			modal
				.querySelector("#toggle-url-or-post-button")
				.addEventListener("click", () => {
					const iframe = modal.querySelector(`#story-iframe-${story.id}`)
					const post = modal.querySelector(`#modal-content-post-${story.id}`)
					if (iframe.style.display === "none") {
						iframe.style.display = "block"
						post.style.display = "none"
						modal.querySelector("#toggle-url-or-post-button").textContent =
							"💬"
					} else {
						iframe.style.display = "none"
						post.style.display = "block"
						modal.querySelector("#toggle-url-or-post-button").textContent =
							"🖥️"
					}
				})
		}






		modal.querySelector(".user-id").addEventListener("click", () =>
			new UserModal(story.by)
		)

		if (story.parent) {
			modal.querySelector("#parent-comment").addEventListener("click", () => {
				API.item(story.parent).then((parentItem) =>
					new StoryModal(parentItem)
				)
			})
		}

		const hideLoadingMessage = () => {
			modal.querySelector("#loading-comments").style.display = "none"
		}

		const commentsRootElement = modal.querySelector(".comments")

		/*
		 * Recursive function to load comments asynchronously
		 * Will load comments for `itemId` and assign to parent element, child
		 * items will render when ready
		 * @param {number} itemId
		 * @param {HTMLElement} parent
		 * @returns {void}
		 */
		const renderCommentsAsync = async (itemId, parent) => {
			const currentStory = await API.item(itemId)

			if (!currentStory.kids) return // Base case for end of comment tree

			// Load all child comments in parallel
			const comments = await Promise.all(
				currentStory.kids.map((commentId) => API.item(commentId))
			)

			// Render each comment and load its children recursively without blocking
			comments.forEach((comment) => {
				if (!comment || comment.deleted) return // Skip if comment is null (deleted)
				const commentElement = document.createElement("div")
				commentElement.classList.add("comment")
				commentElement.innerHTML = `
            <a class="comment-by">${comment.by}</a>
            <p class="comment-text">${sanitize(comment.text)}</p>
            <div class="comments-container"></div>
          `
				renderCommentsAsync(
					comment.id,
					commentElement.querySelector(".comments-container")
				)

				// Listener for user modal
				commentElement
					.querySelector(".comment-by")
					.addEventListener("click", () => {
						new UserModal(comment.by)
					})

				hideLoadingMessage()

				parent.appendChild(commentElement)
			})
		}

		const refresh = () => {
			API.item(story.id).then((story) => {
				modal.querySelector(".story-summary-statistics").innerHTML =
					getStorySummaryStatisticsInnerContent(story)
			})
			commentsRootElement.innerHTML = LOADING_INDICATOR_ELEMENT_STRING
			renderCommentsAsync(story.id, commentsRootElement)
		}

		modal.querySelector("#refresh-button").addEventListener("click", refresh)

		// Trigger load of comments tree
		renderCommentsAsync(story.id, commentsRootElement)
console.log(modal)
		document.body.appendChild(modal)
		addStoryModalToURL(story.id)
		setModalOnTop(modal)
		storiesOpen = true
		return modal
	}

	function AddNewThemeModal() {
		const modal = document.createElement("div")
		modal.classList.add("modal", "title-actions-modal", "use-gpu-rendering", "add-theme-modal")

		modal.innerHTML = `<header class="modal-window-title" role="dialog" aria-modal="true">
		<div class="modal-action-buttons">
		${MODAL_CLOSE_BUTTON_STRING}
		</div>
		<div class="title-actions-modal-title">Add New Theme</div>
		<div class="spacer"></div>
		
	  </header>

	  <main class="modal-content">
		<div class="add-theme-modal-content">
		<p>
			Enter download code from
			<a href="https://github.com/wkyleg/brutalist-hacker-news/blob/main/themes.md"
				title="The git repository for this website" data-allow-external="true">
				themes.md</a>
		</p>
		<input id="download-code" type="text" placeholder="Download Code" />
		
		<p id="error-outlet" style="display: none;"></p>
		
		<button id="add-theme-button" class="button-large">Add Theme</button>
		</div>
	  </main>`

		if (isMobileDevice()) {
			handleModalSizing(modal, "40%", MODAL_FULL_SIZE_WITH_BORDER_COMPUTATION_WIDTH, "30%", "0")
		} else {
			handleModalSizing(modal, "50%", "50%")
		}

		useModalDragBehavior(modal)
		useModalTilingBehavior(modal)
		useModalHeaderCloseButtonBehavior(modal)

		const applyError = (error) => {
			modal.querySelector("#error-outlet").textContent = error
			modal.querySelector("#error-outlet").style.display = "block"
		}

		const resetError = () => {
			modal.querySelector("#error-outlet").textContent = ""
			modal.querySelector("#error-outlet").style.display = "none"
		}

		const applyLoadingBehavior = () => {
			modal.querySelector("#add-theme-button").textContent = "Loading..."
			modal.querySelector("#add-theme-button").disabled = true
			modal.querySelector("#download-code").disabled = true
		}

		const removeLoadingBehavior = () => {
			modal.querySelector("#add-theme-button").textContent = "Add Theme"
			modal.querySelector("#add-theme-button").disabled = false
			modal.querySelector("#download-code").disabled = false
		}



		document.body.appendChild(modal)
		setModalOnTop(modal)

		return modal

	}

	/**
	 * Loading version of normal story element that produces text glitch effect
	 * These are used while top level pages are loading.
	 * @returns {HTMLElement}
	 */
	function LoadingStoryElement() {
		const loadingContainer = document.createElement("div")
		loadingContainer.classList.add("item-title-preview")

		const render = () =>
		(loadingContainer.innerHTML = `<span>${generateLoadingString(
			getRandomNumberBetween(
				LOADING_STRING_MIN_LENGTH,
				isMobileDevice()
					? LOADING_STRING_MAX_LENGTH_MOBILE
					: LOADING_STRING_MAX_LENGTH_DESKTOP
			)
		)}</span>`)

		const animationSpeed = getRandomNumberBetween(
			LOADING_STORY_ANIMATION_REFRESH_INTERVAL_MINIMUM,
			LOADING_STORY_ANIMATION_REFRESH_INTERVAL_MAXIMUM
		)

		// Trigger glitch animation at random interval for element
		const animationUpdateInterval = setInterval(
			render,
			animationSpeed
		)

		render()

		return loadingContainer
	}
</script>
<script type="text/javascript">
	/*
	 * Precomputed loading strings
	 */
	let loadingStrings = ["loading..."]
	// Assign precomputed loading strings to `loadingStrings` when ready
	precomputeLoadingStrings().then((strings) => {
		loadingStrings = strings
	})


	/**
	 * Renders the page according to current navigation state.
	 * Most of the behavior on the page originates from this function.
	 * @param {string} newState
	 * @returns {void}
	 */
	const onNavigationChange = (newState) => {
		try {
			updateDOMForNavigationOption(newState)
			applyCurrentNavigationStateToURL()
			scrollToTop()

			const outlet = $ref(`#${newState}-outlet`)
			const fragment = document.createDocumentFragment()

			const renderStoriesToOutlet = (storyIds) => {
				storyIds.map(story =>
					fragment.appendChild(new StoryListElement(story))
				)
				outlet.innerHTML = ""
				outlet.appendChild(fragment)
				startStoryIntersectionObservers()
			}

			switch (newState) {
				case NAVIGATION_OPTIONS.TOP:
					API.topStories().then(renderStoriesToOutlet)
					break
				case NAVIGATION_OPTIONS.NEW:
					API.newStories().then(renderStoriesToOutlet)
					break
				case NAVIGATION_OPTIONS.BEST:
					API.bestStories().then(renderStoriesToOutlet)
					break
				case NAVIGATION_OPTIONS.ASK:
					API.askStories().then(renderStoriesToOutlet)
					break
				case NAVIGATION_OPTIONS.SHOW:
					API.showStories().then(renderStoriesToOutlet)
					break
				case NAVIGATION_OPTIONS.JOB:
					API.jobStories().then(renderStoriesToOutlet)
					break
				case NAVIGATION_OPTIONS.FAVORITES:
					renderFavorites()
					startStoryIntersectionObservers()
					break
				case NAVIGATION_OPTIONS.SETTINGS:
					$ref("#settings-outlet").scrollIntoView({ behavior: "instant" })
					break
				default:
					onNavigationChange(NAVIGATION_OPTIONS.TOP)
			}
		} catch (error) {
			logError(error, `Error changing navigation state to ${newState}`)
			onNavigationChange(NAVIGATION_OPTIONS.TOP)
		}
	}

	/**
	 * Reactive store for section selected to rended. Will change the section.
	 * This also triggers recomputation of all cascading sections from their own
	 * respective reactive stores.
	 *
	 * @param {string} initialState
	 * @param {function} sideEffect
	 */
	const navigationState = reactive(
		NAVIGATION_OPTIONS.TOP,
		onNavigationChange
	)

	/**
	 * Starts intersection observers for story elements in view. These stories
	 * will only load their data as they come into view.
	 * @returns {void}
	 */

	function startStoryIntersectionObservers() {
		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						if (storyElementLoadingCallbacks[entry.target.id])
							storyElementLoadingCallbacks[entry.target.id]()

						observer.unobserve(entry.target)
					}
				})
			},
			{ rootMargin: "0px 0px 100px 0px" }
		)

		document.querySelectorAll(".item-title-preview").forEach((story) => {
			storiesOpen & observer.observe(story)
	
		})
	}

	/**
	 * Launches root logic of page
	 * @returns {void}
	 */
	async function main() {
		initializeLoadingAnimation()
		attachNavigationButtonClickListeners()
		loadSettingsFromLocalStorage()
		renderFavorites()
		launchModalsFromNavigationParams()
		initLinkClickInterceptBehavior()
		applyInitialNavigationState()
	}

	// Call main when other data loaded
	document.onreadystatechange = () => {
		if (document.readyState === "complete") main()
	};
</script>

</html>