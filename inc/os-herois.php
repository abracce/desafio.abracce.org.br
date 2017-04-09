<?php
$videos = array(
	'FuRNgeQ3AC0',
	'35meA6VHu8g',
	'2m_MdArHS9k',
	'XFqY5SLT1Gw',
	'M7W5mg9lyxw',
	'uDHvREFsuo8',
	'Rrg53OnIyO8',
	'JgEHgJaKPLw',
	'DGYRV5UQUSE',
)
?>

<!-- #os-herois -->
<section id="os-herois" class="sections" data-0="background-position:0px 0px;" data-100000="background-position:0px -7000px;">

	<div class="section-inner">

		<div class="title">
			<div class="main-container">
				<h1>Conheça os Heróis</h1>
				<p>Assista os vídeos de quem aceitou esse desafio.</p>
			</div>
		</div>

		<div class="main-container">

			<div class="content videos">

				<div class="row">

					<?php foreach ($videos as $v) { ?>

					<div class="col-md-4 video">
						<div class="video-inner">
							<img src="//img.youtube.com/vi/<?php echo $v ?>/mqdefault.jpg" alt="" class="img-responsive">
							<a href="#" data-video="<?php echo $v ?>" data-title="CONHEÇA OS HERÓIS DA ABRACCE!" class="player"></a>
						</div>
					</div>

					<?php } ?>

				</div>

				<div class="clearfix"></div>

				<div class="text-center">
					<p>Seja um Heroi você também Abracce essa causa!</p>
				</div>

				<div class="clearfix"></div>

			</div>

			<div class="clearfix"></div>

		</div>

		<div class="clearfix"></div>

	</div>

</section>
<!-- /#os-herois -->

<div class="clearfix"></div><!-- /.clearfix -->
