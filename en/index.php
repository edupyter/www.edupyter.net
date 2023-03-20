<!doctype html>
<html lang="en">
	<head>
		<?php include_once('../inc.meta-en.php') ?>
		<title>EDUPYTER = Python + Jupyter + Thonny + ... + Windows</title>
	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center mt-2">
					<a href="/" class="kbd-off">fr</a> <span class="kbd-on">en</span>
				</div>
				<div class="col-md-4 mt-3">
					<h1><img src='../images/edupyter.png' style='width:200px;' alt='EDUPYTER' /></h1>
					<h2 class="mt-3">PYTHON + THONNY + JUPYTERLAB +<br />JUPYTER NOTEBOOK + ... + WINDOWS</h2>
				</div>
				<div class="col-md-4 text-center mt-2">
					<a href="https://twitter.com/edupyter" class="twitter" target="_blank"><svg viewBox="0 0 512 512" version="1.1" width="18" height="18" aria-hidden="true"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
					<a href="https://github.com/edupyter" class="ms-3 github" target="_blank"><svg viewBox="0 0 512 512" version="1.1" width="18" height="18" aria-hidden="true"><path fill="currentColor" d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1 10.9-55.1 36.7-55.1 36.7 34.2 36.7 55.1zM480 278.2c0 31.9-3.2 65.7-17.5 95-37.9 76.6-142.1 74.8-216.7 74.8-75.8 0-186.2 2.7-225.6-74.8-14.6-29-20.2-63.1-20.2-95 0-41.9 13.9-81.5 41.5-113.6-5.2-15.8-7.7-32.4-7.7-48.8 0-21.5 4.9-32.3 14.6-51.8 45.3 0 74.3 9 108.8 36 29-6.9 58.8-10 88.7-10 27 0 54.2 2.9 80.4 9.2 34-26.7 63-35.2 107.8-35.2 9.8 19.5 14.6 30.3 14.6 51.8 0 16.4-2.6 32.7-7.7 48.2 27.5 32.4 39 72.3 39 114.2zm-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6-18.9 0-37 3.4-56 6-14.9 2.3-29.8 3.2-45.1 3.2-15.2 0-30.1-.9-45.1-3.2-18.7-2.6-37-6-56-6-46.8 0-73.5 38.7-73.5 82.6 0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3zm-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1 36.7-34.2 36.7-55.1-10.9-55.1-36.7-55.1z""></path></svg></a>
				</div>
			</div>
		</div>

		<div id="intro">
			<div class="container">

				<div class="row">
					<div class="col-md-6 offset-md-2">
						<p class="mt-2">Development environment for teaching and learning Python. Can be installed on a hard disk or a USB key without administrator rights.</p>
						<p class="mt-2">Easy to deploy, update and extend (packages, modules, applications...).</p>
						<p class="pt-1 font-monospace small" style="color:silver">open source / free</p>
						<div class="pt-2 apps-logos">
							<img src="../images/python-logo.png" height="35" alt="Python" data-bs-toggle="tooltip" data-bs-placement="top" title="PYTHON" />
							<img src="../images/thonny-logo.png" height="35" alt="Thonny" data-bs-toggle="tooltip" data-bs-placement="top" title="THONNY" />
							<img src="../images/jupyter-logo.png" height="35" alt="Jupyter" data-bs-toggle="tooltip" data-bs-placement="top" title="JUPYTER" />
							<img src="../images/dots.png" height="35" alt="..." />
							<img src="../images/windows-logo.png" height="35" alt="Windows" data-bs-toggle="tooltip" data-bs-placement="top" title="WINDOWS" />
						</div>
					</div>
					<div class="col-md-2 text-center">
						<img src="../images/edupyter-menu.png" alt="Edupyter menu" />
					</div>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="row">

				<?php
				$version_38 = "1.10";
				$version_39 = "1.10";
				$version_310 = "1.9";
				$download_38 =  "https://github.com/edupyter/EDUPYTER38/releases/download/v".$version_38."/EDUPYTER-38-".$version_38."-setup.exe";
				$download_39 =  "https://github.com/edupyter/EDUPYTER39/releases/download/v".$version_39."/EDUPYTER-39-".$version_39."-setup.exe";
				$download_310 = "https://github.com/edupyter/EDUPYTER310/releases/download/v".$version_310."/EDUPYTER-310-".$version_310."-setup.exe";
				?>

				<div class="col-md-2 offset-md-2">
					<h3>EDUPYTER 38</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python 3.8.10</div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 7 and newer</div>
					<p class="mt-2">
						<a href="<?php echo $download_38; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg><sup class="ms-2 text-muted font-monospace" style="font-size:70%"><?php echo $version_38 ?></sup></a>
						<a href="https://github.com/edupyter/EDUPYTER38/releases" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="versions"><svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true"><path fill-rule="evenodd" fill="#3674a9" d="M2.5 7.775V2.75a.25.25 0 01.25-.25h5.025a.25.25 0 01.177.073l6.25 6.25a.25.25 0 010 .354l-5.025 5.025a.25.25 0 01-.354 0l-6.25-6.25a.25.25 0 01-.073-.177zm-1.5 0V2.75C1 1.784 1.784 1 2.75 1h5.025c.464 0 .91.184 1.238.513l6.25 6.25a1.75 1.75 0 010 2.474l-5.026 5.026a1.75 1.75 0 01-2.474 0l-6.25-6.25A1.75 1.75 0 011 7.775zM6 5a1 1 0 100 2 1 1 0 000-2z"></path></svg></a>
						<a href="https://github.com/edupyter/EDUPYTER38/discussions" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="discussions"><svg viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#3674a9" d="M1.5 2.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-3.5a.75.75 0 00-.53.22L3.5 11.44V9.25a.75.75 0 00-.75-.75h-1a.25.25 0 01-.25-.25v-5.5zM1.75 1A1.75 1.75 0 000 2.75v5.5C0 9.216.784 10 1.75 10H2v1.543a1.457 1.457 0 002.487 1.03L7.061 10h3.189A1.75 1.75 0 0012 8.25v-5.5A1.75 1.75 0 0010.25 1h-8.5zM14.5 4.75a.25.25 0 00-.25-.25h-.5a.75.75 0 110-1.5h.5c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0114.25 12H14v1.543a1.457 1.457 0 01-2.487 1.03L9.22 12.28a.75.75 0 111.06-1.06l2.22 2.22v-2.19a.75.75 0 01.75-.75h1a.25.25 0 00.25-.25v-5.5z"></path></svg></a>
						<a href="https://github.com/edupyter/EDUPYTER38/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#3674a9" d="M8 9.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path><path fill="#3674a9" d="M8 0a8 8 0 100 16A8 8 0 008 0zM1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0z"></path></svg></a>
					</p>
				</div>

				<div class="col-md-2">
					<h3>EDUPYTER 39</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python 3.9.13</div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 8.1 and newer</div>
					<p class="mt-2">
						<a href="<?php echo $download_39; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg><sup class="ms-2 text-muted font-monospace" style="font-size:70%"><?php echo $version_39 ?></sup></a>
						<a href="https://github.com/edupyter/EDUPYTER39/releases" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="versions"><svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true"><path fill-rule="evenodd" fill="#3674a9" d="M2.5 7.775V2.75a.25.25 0 01.25-.25h5.025a.25.25 0 01.177.073l6.25 6.25a.25.25 0 010 .354l-5.025 5.025a.25.25 0 01-.354 0l-6.25-6.25a.25.25 0 01-.073-.177zm-1.5 0V2.75C1 1.784 1.784 1 2.75 1h5.025c.464 0 .91.184 1.238.513l6.25 6.25a1.75 1.75 0 010 2.474l-5.026 5.026a1.75 1.75 0 01-2.474 0l-6.25-6.25A1.75 1.75 0 011 7.775zM6 5a1 1 0 100 2 1 1 0 000-2z"></path></svg></a>
						<a href="https://github.com/edupyter/EDUPYTER39/discussions" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="discussions"><svg viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#3674a9" d="M1.5 2.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-3.5a.75.75 0 00-.53.22L3.5 11.44V9.25a.75.75 0 00-.75-.75h-1a.25.25 0 01-.25-.25v-5.5zM1.75 1A1.75 1.75 0 000 2.75v5.5C0 9.216.784 10 1.75 10H2v1.543a1.457 1.457 0 002.487 1.03L7.061 10h3.189A1.75 1.75 0 0012 8.25v-5.5A1.75 1.75 0 0010.25 1h-8.5zM14.5 4.75a.25.25 0 00-.25-.25h-.5a.75.75 0 110-1.5h.5c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0114.25 12H14v1.543a1.457 1.457 0 01-2.487 1.03L9.22 12.28a.75.75 0 111.06-1.06l2.22 2.22v-2.19a.75.75 0 01.75-.75h1a.25.25 0 00.25-.25v-5.5z"></path></svg></a>
						<a href="https://github.com/edupyter/EDUPYTER39/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#3674a9" d="M8 9.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path><path fill="#3674a9" d="M8 0a8 8 0 100 16A8 8 0 008 0zM1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0z"></path></svg></a>
					</p>
				</div>

				<div class="col-md-2">
					<h3>EDUPYTER 310</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python 3.10.8</div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 8.1 and newer</div>
					<!--<div class="text-warning font-monospace" style="font-size:70%">EXPERIMENTAL - NOT ALL LIBRARIES ARE READY<br />FOR PYTHON 3.10</div>-->
					<p class="mt-2">
						<a href="<?php echo $download_310; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg><sup class="ms-2 text-muted font-monospace" style="font-size:70%"><?php echo $version_310 ?></sup></a>
						<a href="https://github.com/edupyter/EDUPYTER310/releases" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="versions"><svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true"><path fill-rule="evenodd" fill="#3674a9" d="M2.5 7.775V2.75a.25.25 0 01.25-.25h5.025a.25.25 0 01.177.073l6.25 6.25a.25.25 0 010 .354l-5.025 5.025a.25.25 0 01-.354 0l-6.25-6.25a.25.25 0 01-.073-.177zm-1.5 0V2.75C1 1.784 1.784 1 2.75 1h5.025c.464 0 .91.184 1.238.513l6.25 6.25a1.75 1.75 0 010 2.474l-5.026 5.026a1.75 1.75 0 01-2.474 0l-6.25-6.25A1.75 1.75 0 011 7.775zM6 5a1 1 0 100 2 1 1 0 000-2z"></path></svg></a>
						<a href="https://github.com/edupyter/EDUPYTER310/discussions" target="_blank" class="ms-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="discussions"><svg viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#3674a9" d="M1.5 2.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-3.5a.75.75 0 00-.53.22L3.5 11.44V9.25a.75.75 0 00-.75-.75h-1a.25.25 0 01-.25-.25v-5.5zM1.75 1A1.75 1.75 0 000 2.75v5.5C0 9.216.784 10 1.75 10H2v1.543a1.457 1.457 0 002.487 1.03L7.061 10h3.189A1.75 1.75 0 0012 8.25v-5.5A1.75 1.75 0 0010.25 1h-8.5zM14.5 4.75a.25.25 0 00-.25-.25h-.5a.75.75 0 110-1.5h.5c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0114.25 12H14v1.543a1.457 1.457 0 01-2.487 1.03L9.22 12.28a.75.75 0 111.06-1.06l2.22 2.22v-2.19a.75.75 0 01.75-.75h1a.25.25 0 00.25-.25v-5.5z"></path></svg></a>
						<a href="https://github.com/edupyter/EDUPYTER310/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#3674a9" d="M8 9.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path><path fill="#3674a9" d="M8 0a8 8 0 100 16A8 8 0 008 0zM1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0z"></path></svg></a>
					</p>
				</div>

				<div class="col-md-2">
					<a class="btn btn-doc btn-xs mt-2" href="mailto:contact@edupyter.net" target="_blank" role="button">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor" viewBox="0 0 512 512" role="img" class="me-2" style="float:left;">
							<path fill="#27ae60" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
						</svg>
						<div style="margin-left:25px;">Need another version?<br />&#10141; contact@edupyter.net</div>
					</a>
				</div>

			</div>
		</div>

		<div class="container mt-5">
			<div class="row">

				<div class="col-md-6 offset-md-2">
					<h4 class="font-monospace">Applications</h4>
					<p class="font-monospace small text-muted">Python 3.8.x / 3.9.x / 3.10.x - PIP - JupyterLab - Jupyter Notebook - Thonny - Console...</p>
				</div>

				<div class="col-md-2">
					<a class="btn btn-doc btn-xs mt-2" href="https://edupyter.github.io/documentation/ajouter_app/" target="_blank" role="button">
						<svg xmlns="http://www.w3.org/2000/svg" width="14" fill="currentColor" viewBox="0 0 448 512" role="img" class="me-2" style="float:left;">
							<path fill="#27ae60" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path>
						</svg>
						<div style="margin-left:25px;">How to add an application</div>
					</a>
				</div>

			</div>
		</div>

		<div class="container mt-3">
			<div class="row">
				<div class="col-md-6 offset-md-2">
					<h4 class="font-monospace">Packages installed</h4>
					<p class="font-monospace small text-muted" style="text-align:justify">
					<?php
					$bibliotheques = '
aiofiles                       22.1.0
aiosqlite                      0.18.0
anyio                          3.6.1
argon2-cffi                    21.3.0
argon2-cffi-bindings           21.2.0
arrow                          1.2.3
astroid                        2.11.6
asttokens                      2.0.5
attrs                          21.4.0
Babel                          2.10.3
backcall                       0.2.0
beautifulsoup4                 4.11.1
bleach                         5.0.0
blurhash                       1.1.4
certifi                        2022.6.15
cffi                           1.15.0
charset-normalizer             2.0.12
colorama                       0.4.5
contourpy                      1.0.5
cycler                         0.11.0
debugpy                        1.6.0
decorator                      5.1.1
defusedxml                     0.7.1
dill                           0.3.5.1
docutils                       0.18.1
entrypoints                    0.4
executing                      0.8.3
fastjsonschema                 2.15.3
fonttools                      4.33.3
fqdn                           1.5.1
idna                           3.3
importlib-metadata             4.11.4
importlib-resources            5.12.0
ipykernel                      6.15.0
ipython                        8.4.0
ipython-genutils               0.2.0
ipywidgets                     8.0.4
isoduration                    20.11.0
isort                          5.10.1
jedi                           0.18.1
Jinja2                         3.1.2
json5                          0.9.8
jsonpointer                    2.3
jsonschema                     4.17.3
jupyter_client                 8.0.3
jupyter_core                   5.3.0
jupyter-events                 0.6.3
jupyter-server                 1.23.6
jupyter_server_fileid          0.8.0
jupyter_server_ydoc            0.6.1
jupyter-ydoc                   0.2.3
jupyterlab                     3.6.1
jupyterlab-language-pack-fr-FR 3.6.post0
jupyterlab-pygments            0.2.2
jupyterlab_server              2.20.0
jupyterlab-widgets             3.0.2
kiwisolver                     1.4.3
lazy-object-proxy              1.7.1
MarkupSafe                     2.1.1
Mastodon.py                    1.8.0
matplotlib                     3.7.1
matplotlib-inline              0.1.3
mccabe                         0.7.0
mistune                        0.8.4
mypy                           0.961
mypy-extensions                0.4.3
nbclassic                      0.3.7
nbclient                       0.6.4
nbconvert                      6.5.0
nbformat                       5.4.0
nest-asyncio                   1.5.5
notebook                       6.4.12
notebook-shim                  0.1.0
numpy                          1.24.2
oauthlib                       3.2.2
packaging                      21.3
pandas                         1.5.3
pandocfilters                  1.5.0
parso                          0.8.3
pickleshare                    0.7.5
Pillow                         9.4.0
pip                            23.0.1
platformdirs                   2.5.2
prometheus-client              0.14.1
prompt-toolkit                 3.0.29
psutil                         5.9.1
pure-eval                      0.2.2
pycparser                      2.21
Pygments                       2.12.0
pylint                         2.14.3
pyparsing                      3.0.9
pyrsistent                     0.18.1
pyserial                       3.5
python-dateutil                2.8.2
python-json-logger             2.0.7
python-magic                   0.4.27
pytz                           2022.1
pywin32                        304
pywinpty                       2.0.5
pyxel                          1.9.12
PyYAML                         6.0
pyzmq                          25.0.1
requests                       2.28.2
requests-oauthlib              1.3.1
rfc3339-validator              0.1.4
rfc3986-validator              0.1.1
Send2Trash                     1.8.0
setuptools                     58.1.0
six                            1.16.0
sniffio                        1.2.0
soupsieve                      2.3.2.post1
stack-data                     0.3.0
terminado                      0.15.0
thonny                         4.0.2
tinycss2                       1.1.1
tomli                          2.0.1
tomlkit                        0.11.0
tornado                        6.2
traitlets                      5.9.0
tweepy                         4.13.0
typing_extensions              4.2.0
uri-template                   1.2.0
urllib3                        1.26.9
wcwidth                        0.2.5
webcolors                      1.12
webencodings                   0.5.1
websocket-client               1.3.2
wheel                          0.37.1
widgetsnbextension             4.0.2
wrapt                          1.14.1
y-py                           0.5.9
ypy-websocket                  0.8.2
zipp                           3.8.0
';
					//$bibliotheques = preg_replace("/\s+[0-9+\.]+[0-9]+/",", ",trim($bibliotheques));
					$bibliotheques = preg_replace("/\s+/",", ",trim($bibliotheques));
					$bibliotheques = trim($bibliotheques, ", ");
					echo $bibliotheques;
					?>
					</p>
				</div>

				<div class="col-md-2">
					<a class="btn btn-doc btn-xs mt-2" href="https://edupyter.github.io/documentation/ajouter_bibliotheque/" target="_blank" role="button">
						<svg xmlns="http://www.w3.org/2000/svg" width="14" fill="currentColor" viewBox="0 0 448 512" role="img" class="me-2" style="float:left;">
							<path fill="#27ae60" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path>
						</svg>
						<div style="margin-left:25px;">How to add a package</div>
					</a>
				</div>

			</div>
		</div>

		<div id="footer" class="text-secondary text-center p-4" style="margin-top:80px;">
			<img src="<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>/images/edupyter-logo.png" width="50" alt="Portable Dev Apps" />
			<br />
			<small>a bug, a typo, a comment... about this website : <span style="color:#3674a9">contact@edupyter.net</span></small>
		</div>

		<?php include('../inc.bottom.php') ?>

	</body>
</html>
