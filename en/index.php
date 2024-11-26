<!doctype html>
<html lang="en">
	<head>
		<?php include_once('../inc.meta-en.php') ?>
		<title>EDUPYTER = Python + Jupyter + Thonny + ... + Windows</title>
	</head>

	<body>

		<?php include_once('../inc.versions.php') ?>

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

				<div class="col-md-2">
					<h3>EDUPYTER 38</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python <?php echo $version_38 ?></div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 7 and newer</div>
					<p class="mt-2">
						<a href="<?php echo $download_38; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER38" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="code"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M9.424 2.023a.75.75 0 0 1 .556.904L7.48 13.42a.75.75 0 0 1-1.46-.348L8.52 2.58a.75.75 0 0 1 .904-.556ZM11.16 4.22a.75.75 0 0 1 1.06 0l3.25 3.25L16 8l-.53.53-3.25 3.25a.75.75 0 1 1-1.06-1.06L13.88 8l-2.72-2.72a.75.75 0 0 1 0-1.06ZM4.84 5.28a.75.75 0 1 0-1.06-1.06L.53 7.47 0 8l.53.53 3.25 3.25a.75.75 0 0 0 1.06-1.06L2.12 8l2.72-2.72Z" fill="#000"/></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER38/-/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.25a.75.75 0 0 0 0-1.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v5.25a.75.75 0 0 0 1.5 0V4.364l2.19 1.14a.25.25 0 0 1 .107.338l-1.072 2.062a.75.75 0 0 0 1.33.692l1.073-2.062a1.75 1.75 0 0 0-.745-2.36l-2.912-1.516A2 2 0 0 0 9 1H3Zm6 12a.75.75 0 0 1 .75-.75h1.5v-1.5a.75.75 0 0 1 1.5 0v1.5h1.5a.75.75 0 0 1 0 1.5h-1.5v1.5a.75.75 0 0 1-1.5 0v-1.5h-1.5A.75.75 0 0 1 9 13Z" fill="#000"/></svg></a>
					</p>
				</div>

				<div class="col-md-2">
					<h3>EDUPYTER 39</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python <?php echo $version_39 ?></div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 8.1 and newer</div>
					<p class="mt-2">
						<a href="<?php echo $download_39; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER39" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="code"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M9.424 2.023a.75.75 0 0 1 .556.904L7.48 13.42a.75.75 0 0 1-1.46-.348L8.52 2.58a.75.75 0 0 1 .904-.556ZM11.16 4.22a.75.75 0 0 1 1.06 0l3.25 3.25L16 8l-.53.53-3.25 3.25a.75.75 0 1 1-1.06-1.06L13.88 8l-2.72-2.72a.75.75 0 0 1 0-1.06ZM4.84 5.28a.75.75 0 1 0-1.06-1.06L.53 7.47 0 8l.53.53 3.25 3.25a.75.75 0 0 0 1.06-1.06L2.12 8l2.72-2.72Z" fill="#000"/></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER39/-/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.25a.75.75 0 0 0 0-1.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v5.25a.75.75 0 0 0 1.5 0V4.364l2.19 1.14a.25.25 0 0 1 .107.338l-1.072 2.062a.75.75 0 0 0 1.33.692l1.073-2.062a1.75 1.75 0 0 0-.745-2.36l-2.912-1.516A2 2 0 0 0 9 1H3Zm6 12a.75.75 0 0 1 .75-.75h1.5v-1.5a.75.75 0 0 1 1.5 0v1.5h1.5a.75.75 0 0 1 0 1.5h-1.5v1.5a.75.75 0 0 1-1.5 0v-1.5h-1.5A.75.75 0 0 1 9 13Z" fill="#000"/></svg></a>
					</p>
				</div>

				<div class="col-md-2">
					<h3>EDUPYTER 310</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python <?php echo $version_310 ?></div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 8.1 and newer</div>
					<!--<div class="text-warning font-monospace" style="font-size:70%">EXPÉRIMENTAL - TOUTES LES BIBLIOTHÈQUES<br />NE SONT PAS PRÊTES POUR PYTHON 3.10</div>-->
					<p class="mt-2">
						<a href="<?php echo $download_310; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER310" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="code"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M9.424 2.023a.75.75 0 0 1 .556.904L7.48 13.42a.75.75 0 0 1-1.46-.348L8.52 2.58a.75.75 0 0 1 .904-.556ZM11.16 4.22a.75.75 0 0 1 1.06 0l3.25 3.25L16 8l-.53.53-3.25 3.25a.75.75 0 1 1-1.06-1.06L13.88 8l-2.72-2.72a.75.75 0 0 1 0-1.06ZM4.84 5.28a.75.75 0 1 0-1.06-1.06L.53 7.47 0 8l.53.53 3.25 3.25a.75.75 0 0 0 1.06-1.06L2.12 8l2.72-2.72Z" fill="#000"/></svg></a>
							<a href="https://forge.apps.education.fr/edupyter/EDUPYTER310/-/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.25a.75.75 0 0 0 0-1.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v5.25a.75.75 0 0 0 1.5 0V4.364l2.19 1.14a.25.25 0 0 1 .107.338l-1.072 2.062a.75.75 0 0 0 1.33.692l1.073-2.062a1.75 1.75 0 0 0-.745-2.36l-2.912-1.516A2 2 0 0 0 9 1H3Zm6 12a.75.75 0 0 1 .75-.75h1.5v-1.5a.75.75 0 0 1 1.5 0v1.5h1.5a.75.75 0 0 1 0 1.5h-1.5v1.5a.75.75 0 0 1-1.5 0v-1.5h-1.5A.75.75 0 0 1 9 13Z" fill="#000"/></svg></a>
					</p>
				</div>

				<div class="col-md-2">
					<h3>EDUPYTER 311</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python <?php echo $version_311 ?></div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 8.1 and newer</div>
					<!--<div class="text-warning font-monospace" style="font-size:70%">EXPÉRIMENTAL - TOUTES LES BIBLIOTHÈQUES<br />NE SONT PAS PRÊTES POUR PYTHON 3.10</div>-->
					<p class="mt-2">
						<a href="<?php echo $download_311; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER311" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="code"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M9.424 2.023a.75.75 0 0 1 .556.904L7.48 13.42a.75.75 0 0 1-1.46-.348L8.52 2.58a.75.75 0 0 1 .904-.556ZM11.16 4.22a.75.75 0 0 1 1.06 0l3.25 3.25L16 8l-.53.53-3.25 3.25a.75.75 0 1 1-1.06-1.06L13.88 8l-2.72-2.72a.75.75 0 0 1 0-1.06ZM4.84 5.28a.75.75 0 1 0-1.06-1.06L.53 7.47 0 8l.53.53 3.25 3.25a.75.75 0 0 0 1.06-1.06L2.12 8l2.72-2.72Z" fill="#000"/></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER311/-/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.25a.75.75 0 0 0 0-1.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v5.25a.75.75 0 0 0 1.5 0V4.364l2.19 1.14a.25.25 0 0 1 .107.338l-1.072 2.062a.75.75 0 0 0 1.33.692l1.073-2.062a1.75 1.75 0 0 0-.745-2.36l-2.912-1.516A2 2 0 0 0 9 1H3Zm6 12a.75.75 0 0 1 .75-.75h1.5v-1.5a.75.75 0 0 1 1.5 0v1.5h1.5a.75.75 0 0 1 0 1.5h-1.5v1.5a.75.75 0 0 1-1.5 0v-1.5h-1.5A.75.75 0 0 1 9 13Z" fill="#000"/></svg></a>
					</p>
				</div>				

				<div class="col-md-2">
					<h3>EDUPYTER 312</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python <?php echo $version_312 ?></div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 8.1 and newer</div>
					<!--<div class="text-warning font-monospace" style="font-size:70%">EXPÉRIMENTAL - TOUTES LES BIBLIOTHÈQUES<br />NE SONT PAS PRÊTES POUR PYTHON 3.10</div>-->
					<p class="mt-2">
						<a href="<?php echo $download_312; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER312" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="code"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M9.424 2.023a.75.75 0 0 1 .556.904L7.48 13.42a.75.75 0 0 1-1.46-.348L8.52 2.58a.75.75 0 0 1 .904-.556ZM11.16 4.22a.75.75 0 0 1 1.06 0l3.25 3.25L16 8l-.53.53-3.25 3.25a.75.75 0 1 1-1.06-1.06L13.88 8l-2.72-2.72a.75.75 0 0 1 0-1.06ZM4.84 5.28a.75.75 0 1 0-1.06-1.06L.53 7.47 0 8l.53.53 3.25 3.25a.75.75 0 0 0 1.06-1.06L2.12 8l2.72-2.72Z" fill="#000"/></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER312/-/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.25a.75.75 0 0 0 0-1.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v5.25a.75.75 0 0 0 1.5 0V4.364l2.19 1.14a.25.25 0 0 1 .107.338l-1.072 2.062a.75.75 0 0 0 1.33.692l1.073-2.062a1.75 1.75 0 0 0-.745-2.36l-2.912-1.516A2 2 0 0 0 9 1H3Zm6 12a.75.75 0 0 1 .75-.75h1.5v-1.5a.75.75 0 0 1 1.5 0v1.5h1.5a.75.75 0 0 1 0 1.5h-1.5v1.5a.75.75 0 0 1-1.5 0v-1.5h-1.5A.75.75 0 0 1 9 13Z" fill="#000"/></svg></a>
					</p>
				</div>	

				<div class="col-md-2">
					<h3>EDUPYTER 313</h3>
					<div class="text-muted font-monospace" style="font-size:70%">with Python <?php echo $version_313 ?></div>
					<div class="text-danger font-monospace" style="font-size:70%">for Windows 8.1 and newer</div>
					<!--<div class="text-warning font-monospace" style="font-size:70%">EXPÉRIMENTAL - TOUTES LES BIBLIOTHÈQUES<br />NE SONT PAS PRÊTES POUR PYTHON 3.10</div>-->
					<p class="mt-2">
						<a href="<?php echo $download_313; ?>" class="btn btn-download btn-xs mt-2"><svg viewBox="0 0 512 512" version="1.1" width="16" height="16" aria-hidden="true"><path fill="#6c757d" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER313" target="_blank" class="ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="code"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M9.424 2.023a.75.75 0 0 1 .556.904L7.48 13.42a.75.75 0 0 1-1.46-.348L8.52 2.58a.75.75 0 0 1 .904-.556ZM11.16 4.22a.75.75 0 0 1 1.06 0l3.25 3.25L16 8l-.53.53-3.25 3.25a.75.75 0 1 1-1.06-1.06L13.88 8l-2.72-2.72a.75.75 0 0 1 0-1.06ZM4.84 5.28a.75.75 0 1 0-1.06-1.06L.53 7.47 0 8l.53.53 3.25 3.25a.75.75 0 0 0 1.06-1.06L2.12 8l2.72-2.72Z" fill="#000"/></svg></a>
						<a href="https://forge.apps.education.fr/edupyter/EDUPYTER313/-/issues" target="_blank" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="bug report"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#3674a9" d="M3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.25a.75.75 0 0 0 0-1.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v5.25a.75.75 0 0 0 1.5 0V4.364l2.19 1.14a.25.25 0 0 1 .107.338l-1.072 2.062a.75.75 0 0 0 1.33.692l1.073-2.062a1.75 1.75 0 0 0-.745-2.36l-2.912-1.516A2 2 0 0 0 9 1H3Zm6 12a.75.75 0 0 1 .75-.75h1.5v-1.5a.75.75 0 0 1 1.5 0v1.5h1.5a.75.75 0 0 1 0 1.5h-1.5v1.5a.75.75 0 0 1-1.5 0v-1.5h-1.5A.75.75 0 0 1 9 13Z" fill="#000"/></svg></a>
					</p>
				</div>

			</div>
		</div>		


		<div class="container mt-5">
			<div class="row">
				<div class="col-md-12 text-center">
					<a class="btn btn-doc btn-xs me-2" href="https://edupyter.github.io/documentation/ajouter_bibliotheque/" target="_blank" role="button">
						<svg xmlns="http://www.w3.org/2000/svg" width="14" fill="currentColor" viewBox="0 0 448 512" role="img" class="me-2" style="float:left;">
							<path fill="#27ae60" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path>
						</svg>
						<div style="margin-left:25px;">How to add a package</div>
					</a>
					<a class="btn btn-doc btn-xs ms-2" href="https://edupyter.github.io/documentation/ajouter_app/" target="_blank" role="button">
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
				<div class="col-md-12">
					<h4 class="font-monospace">Applications</h4>
					<p class="font-monospace small text-muted">Python 3.8.x / 3.9.x / 3.10.x / 3.11.x / 3.12.x / 3.13.x - PIP - JupyterLab - Jupyter Notebook - Thonny - Console...</p>
				</div>
			</div>
		</div>

		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12">
					<h4 class="font-monospace">Packages installed</h4>
					<p class="font-monospace small text-muted" style="text-align:justify">
					<?php
					$bibliotheques = '
anyio                          4.3.0
argon2-cffi                    23.1.0
argon2-cffi-bindings           21.2.0
arrow                          1.3.0
astroid                        3.1.0
asttokens                      2.4.1
async-lru                      2.0.4
attrs                          23.2.0
Babel                          2.14.0
beautifulsoup4                 4.12.3
bleach                         6.1.0
blurhash                       1.1.4
certifi                        2024.2.2
cffi                           1.16.0
charset-normalizer             3.3.2
colorama                       0.4.6
comm                           0.2.2
contourpy                      1.2.0
cycler                         0.12.1
debugpy                        1.8.1
decorator                      5.1.1
defusedxml                     0.7.1
dill                           0.3.8
docutils                       0.20.1
executing                      2.0.1
fastjsonschema                 2.19.1
fonttools                      4.50.0
fqdn                           1.5.1
h11                            0.14.0
httpcore                       1.0.4
httpx                          0.27.0
idna                           3.6
ipykernel                      6.29.3
ipython                        8.22.2
ipywidgets                     8.1.2
isoduration                    20.11.0
isort                          5.13.2
jedi                           0.19.1
Jinja2                         3.1.3
json5                          0.9.24
jsonpointer                    2.4
jsonschema                     4.21.1
jsonschema-specifications      2023.12.1
jupyter                        1.0.0
jupyter_client                 8.6.1
jupyter-console                6.6.3
jupyter_core                   5.7.2
jupyter-events                 0.10.0
jupyter-lsp                    2.2.4
jupyter_server                 2.13.0
jupyter_server_terminals       0.5.3
jupyterlab                     4.1.5
jupyterlab-language-pack-fr-FR 4.1.post2
jupyterlab_pygments            0.3.0
jupyterlab_server              2.25.4
jupyterlab_widgets             3.0.10
kiwisolver                     1.4.5
MarkupSafe                     2.1.5
Mastodon.py                    1.8.1
matplotlib                     3.8.3
matplotlib-inline              0.1.6
mccabe                         0.7.0
mistune                        3.0.2
mypy                           1.9.0
mypy-extensions                1.0.0
nbclient                       0.10.0
nbconvert                      7.16.3
nbformat                       5.10.3
nest-asyncio                   1.6.0
notebook                       7.1.2
notebook_shim                  0.2.4
numpy                          1.26.4
oauthlib                       3.2.2
overrides                      7.7.0
packaging                      24.0
pandas                         2.2.1
pandocfilters                  1.5.1
parso                          0.8.3
pillow                         10.2.0
pip                            24.0
platformdirs                   4.2.0
prometheus_client              0.20.0
prompt-toolkit                 3.0.43
psutil                         5.9.8
pure-eval                      0.2.2
pycparser                      2.21
Pygments                       2.17.2
pylint                         3.1.0
pyparsing                      3.1.2
pyserial                       3.5
python-dateutil                2.9.0.post0
python-json-logger             2.0.7
python-magic-bin               0.4.14
pytz                           2024.1
pywin32                        306
pywinpty                       2.0.13
pyxel                          2.0.9
PyYAML                         6.0.1
pyzmq                          25.1.2
qtconsole                      5.5.1
QtPy                           2.4.1
referencing                    0.34.0
requests                       2.31.0
requests-oauthlib              1.4.1
rfc3339-validator              0.1.4
rfc3986-validator              0.1.1
rpds-py                        0.18.0
Send2Trash                     1.8.2
setuptools                     69.2.0
six                            1.16.0
sniffio                        1.3.1
soupsieve                      2.5
stack-data                     0.6.3
terminado                      0.18.1
thonny                         4.1.4
tinycss2                       1.2.1
tomlkit                        0.12.4
tornado                        6.4
traitlets                      5.14.2
tweepy                         4.14.0
types-python-dateutil          2.9.0.20240316
typing_extensions              4.10.0
tzdata                         2024.1
uri-template                   1.3.0
urllib3                        2.2.1
wcwidth                        0.2.13
webcolors                      1.13
webencodings                   0.5.1
websocket-client               1.7.0
wheel                          0.43.0
widgetsnbextension             4.0.10
';
					
					$bibliotheques = preg_replace('/\R/', ', ',trim($bibliotheques));
					$bibliotheques = preg_replace('/\s{2,}/', ' ', trim($bibliotheques));
					echo $bibliotheques;
					?>
					</p>
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
