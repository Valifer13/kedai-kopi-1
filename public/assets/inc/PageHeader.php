<?php 
function PageHeader($title) {
    return "
		<!-- Section Main -->
		<section id=\"breadcrumb\" data-background=\"assets/img/demo/slides/02.webp\" class=\"parallax-window\">
			<div>
				<span class=\"section-suptitle text-center\">Coffee Lover</span>
				<h1 class=\"section-title white-font text-center\">{$title}</h1>
				<ul>
					<li><a href=\"index.php\">Beranda</a></li>
					<li>{$title}</li>
				</ul>
			</div>
		</section>
		<!-- End Section Main -->
        ";
}