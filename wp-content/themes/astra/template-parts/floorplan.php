<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title() ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/single.css">
</head>

<body>
	<div class="containers">
		<div class="alldata">
			<div class="header">
				<div class="close"><a href="javascript:history.back()">Close &#10005;</a></div>
				<div class="single-title"><span style="color:#C9AC83; margin-right:20px">Residence</span> <?php the_field('serial') ?> </div>
				<div class="single-info">
					<p class="singles"> <?php the_field('bedroom_listing') ?> Bedroom<span style="padding-left: 25px;padding-right: 25px;"> | </span><?php the_field('bathroom_listing') ?> Bathroom <span style="padding-left: 25px;padding-right: 25px;"> | </span> Interior <?php the_field('interior_size') ?> SF <span style="padding-left: 25px;padding-right: 25px;"> | </span>Balconies <?php the_field('belconies_size') ?> SF<span style="padding-left: 25px;padding-right: 25px;"> | </span>Total <?php the_field('total_size') ?> SF</p>
				</div>
				<div class="mobile">
					<p><span style="color:#C9AC83; margin-right:20px;font-weight: 400;font-size: 20px">Residence <?php the_field('serial') ?></span>
						<span><?php the_field('bedroom_listing') ?> Bedroom</span> | <span><?php the_field('bathroom_listing') ?> Bathroom</span> | <span>Interior <?php the_field('interior_size') ?> SF</span> | <span>Balconies <?php the_field('belconies_size') ?> SF</span> | <span>Total <?php the_field('total_size') ?> SF</span>
					</p>
				</div>
			</div>
			<hr>
			<div class="buttonsx">
				<button id="download-pdf" class="single-btn">Download PDF</button>
				<a id="download-pdf" href="<?php the_field('file') ?>" target="_blank"><button id="download-pdf" class="single-btn">Open PDF</button></a>
				<a href="<?php get_permalink() ?>"><button class="single-btn">SEE Views</button></a>
			</div>
			<div class="flor-plan">
				<div class="imgs">
					<img src="<?php the_field("floor-plan") ?>" alt="">
				</div>
			</div>
			<div class="footer-post">
				<div class="small-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/Group 13941.png" alt="">
				</div>
				<div class="dummy-text">
					<div class="dummy-left">
						<p>
							<strong>ORAL REPRESENTATIONS CANNOT BE RELIED UPON AS CORRECTLY STATING THE REPRESENTATIONS OF THE DEVELOPER. FOR CORRECT REPRESENTATIONS, MAKE REFERENCE TO THIS BROCHURE AND TO THE DOCUMENTS REQUIRED BY SECTION 718.503, FLORIDA STATUTES, TO BE FURNISHED BY A DEVELOPER TO A BUYER OR LESSEE.</strong>
						</p>
						<p>
							<span>Stated dimensions are measured to the exterior boundaries of the exterior walls and the centerline of interior demising walls and in fact vary from the dimensions that would be determined by using the description and definition of the “Unit” set forth in the Declaration (which generally only includes the interior airspace between the perimeter walls and excludes interior structural components). For your reference, the area of the Unit, determined in accordance with those defined unit boundaries, is as set forth in Exhibit 3 to the Declaration. Note that measurements of rooms set forth on this floor plan are generally taken at the greatest points of each given room (as if the room were a perfect rectangle), without regard for any cutouts. Accordingly, the area of the actual room will typically be smaller than the product obtained by multiplying the stated length times width. All dimensions are approximate and may vary with actual construction, and all floor plans and development plans are subject to change.</span>
						</p>
					</div>
					<div class="dummy-right">
						<a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Path 3943.svg" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var pdfButton = document.getElementById("download-pdf");
			pdfButton.addEventListener("click", function() {
				var pdfUrl = "<?php the_field('file'); ?>";
				var link = document.createElement("a");
				link.href = pdfUrl;
				link.setAttribute("download", "");
				document.body.appendChild(link);
				link.click();
				document.body.removeChild(link);
			});
		});
	</script>
</body>

</html>