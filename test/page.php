<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Test
 */

get_header();
?>

	<main id="primary" class="site-main">
<section id="one">
	<div class="container">
		<div class="main-title"><?php  echo get_field('main_title');   ?></div>
		<div class="text"><?php  echo get_field('text');   ?></div>
			<div class="button"> <img src="<?php  echo get_field('button');   ?>">
<div class="krug">
	</div>
				<div class="cons">  <p class="conss">Получите <span class="besp">бесплатную</span> консультацию </p></div>
				<div class="telef"> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.77977 7.80095C6.29842 8.86129 7.15792 9.71689 8.2206 10.2307C8.29835 10.2675 8.38436 10.2835 8.47015 10.277C8.55595 10.2705 8.63857 10.2418 8.7099 10.1937L10.2746 9.15028C10.3438 9.10414 10.4234 9.07598 10.5063 9.06838C10.5891 9.06077 10.6725 9.07394 10.749 9.10671L13.6763 10.3613C13.7757 10.4035 13.8588 10.4769 13.9128 10.5705C13.9669 10.664 13.9892 10.7726 13.9762 10.8798C13.8837 11.6038 13.5304 12.2693 12.9826 12.7516C12.4347 13.2339 11.7299 13.5 11 13.5C8.74566 13.5 6.58365 12.6045 4.98959 11.0104C3.39553 9.41635 2.5 7.25434 2.5 5C2.50004 4.27011 2.76612 3.56526 3.24843 3.01742C3.73073 2.46959 4.39618 2.11634 5.12019 2.02381C5.22745 2.01083 5.33602 2.03306 5.42955 2.08715C5.52307 2.14124 5.59649 2.22426 5.63873 2.3237L6.89439 5.25357C6.92687 5.32935 6.9401 5.41199 6.93291 5.49413C6.92572 5.57626 6.89833 5.65535 6.85318 5.72434L5.81341 7.31307C5.76608 7.38454 5.73811 7.46706 5.73221 7.55257C5.72631 7.63809 5.7427 7.72367 5.77977 7.80095Z" fill="white" fill-opacity="0.8" stroke="white" stroke-opacity="0.8" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
 </div>
				<div class="ved"> <p class="vedd">Введите ваш номер телефона </p> </div>
				<hr>
				<div class="bot"><p class ="tex">Получить консультацию</p> </div>

				</div>

</div>
</section>
<section id="two">

		

	<div class="two">
		<div class="container">	
		<div class="pp2">	
<div class="tex2">
	<div class="zag2"><?php  echo get_field('zag2');   ?></div>
	<div class="text2"><?php  echo get_field('text2');   ?></div>
</div>
<div class="i2">
	<div class="img1"> <img src="<?php  echo get_field('img1') ?>"></div>
	<div class="img2"> <img src="<?php  echo get_field('img2') ?>"></div>
	<div class="img3"> <img src="<?php  echo get_field('img3') ?>"></div>
	<div class="sliders">
	<div class="slider1"> </div>
	<div class="slider2"> </div>
	<div class="slider3"> </div>
	</div>
	</div>
</div>
		 </div>
</section>


<section id="three">
	<div class="container">	
		<div class="pp3">
		<div class="zag3"><?php  echo get_field('zag3');   ?></div>
<div class="i3">
	<div class="img4"> <img src="<?php  echo get_field('img4') ?>"></div>
	<div class="img5"> <img src="<?php  echo get_field('img5') ?>"></div>
	<div class="img6"> <img src="<?php  echo get_field('img6') ?>"></div>
	</div>
	<div class="text_three">

	<div class="text3"><?php  echo get_field('text3');   ?></div>
	<div class="strelochka"> <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="12.5" cy="12.5" r="12.25" stroke="white" stroke-opacity="0.22" stroke-width="0.5"/>
<circle cx="12.4999" cy="12.4999" r="8.30263" stroke="white" stroke-width="0.5"/>
<path d="M9.16235 12.5H15.8376M15.8376 12.5L14.4072 11.0398M15.8376 12.5L14.4072 13.9602" stroke="white"/>
</svg>
 </div>

</div>
</div>
	</div>
</section>

<section id="four">
	<div class="container">	
		<div class="pp4">

		<div class="zag4"><?php  echo get_field('zag4');   ?></div>
		<div class="text44">
		<div class="text4_1"><?php  echo get_field('text4_1');   ?></div>
		<div class="text4_2"><?php  echo get_field('text4_2');   ?></div>
		<div class="text4_3"><?php  echo get_field('text4_3');   ?></div>
		</div>
		
			<div class="img4_1"> <img src="<?php  echo get_field('img4_1') ?>"></div>
			<div class="img4_2"> <img src="<?php  echo get_field('img4_2') ?>"></div>
		
		</div>
	</div>	
</section>
<section id="five">
	<div class="container">	
		<div class="pp5">
			<div class="tex5">
		<div class="zag5"><?php  echo get_field('zag5');   ?></div>
		<div class="text5"><?php  echo get_field('text5'); ?></div>
			</div>

<div class="cal_cnop">
			<div class="button"> <img src="<?php  echo get_field('button');   ?>">
<div class="krug">
	</div>
				<div class="cons">  <p class="conss">Получите <span class="besp">бесплатную</span> консультацию </p></div>
				<div class="telef"> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.77977 7.80095C6.29842 8.86129 7.15792 9.71689 8.2206 10.2307C8.29835 10.2675 8.38436 10.2835 8.47015 10.277C8.55595 10.2705 8.63857 10.2418 8.7099 10.1937L10.2746 9.15028C10.3438 9.10414 10.4234 9.07598 10.5063 9.06838C10.5891 9.06077 10.6725 9.07394 10.749 9.10671L13.6763 10.3613C13.7757 10.4035 13.8588 10.4769 13.9128 10.5705C13.9669 10.664 13.9892 10.7726 13.9762 10.8798C13.8837 11.6038 13.5304 12.2693 12.9826 12.7516C12.4347 13.2339 11.7299 13.5 11 13.5C8.74566 13.5 6.58365 12.6045 4.98959 11.0104C3.39553 9.41635 2.5 7.25434 2.5 5C2.50004 4.27011 2.76612 3.56526 3.24843 3.01742C3.73073 2.46959 4.39618 2.11634 5.12019 2.02381C5.22745 2.01083 5.33602 2.03306 5.42955 2.08715C5.52307 2.14124 5.59649 2.22426 5.63873 2.3237L6.89439 5.25357C6.92687 5.32935 6.9401 5.41199 6.93291 5.49413C6.92572 5.57626 6.89833 5.65535 6.85318 5.72434L5.81341 7.31307C5.76608 7.38454 5.73811 7.46706 5.73221 7.55257C5.72631 7.63809 5.7427 7.72367 5.77977 7.80095Z" fill="white" fill-opacity="0.8" stroke="white" stroke-opacity="0.8" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
 </div>
				<div class="ved"> <p class="vedd">Введите ваш номер телефона </p> </div>
				<hr>
				<div class="bot"><p class ="tex">Получить консультацию</p> </div>

				</div>
</div>






		</div>
	</div>	
</section>




<section id="six">
	<div class="container">	
		<div class="pp6">
					<div class="zag6"><?php  echo get_field('zag6');   ?></div>
					<div class="tt6">
						<div class="text6_1"><?php  echo get_field('text6_1');   ?></div>
						<div class="text6_2"><?php  echo get_field('text6_2');   ?></div>
					</div>
					<div class="tt66">	
						<div class="text6_3"><?php  echo get_field('text6_3');   ?></div>
						<div class="text6_4"><?php  echo get_field('text6_4');   ?></div>
						<div class="text6_5"><?php  echo get_field('text6_5');   ?></div>
					</div>
							<div class="img6_1"> <img src="<?php  echo get_field('img6_1');   ?>">
										
		</div>
		<div class="img6_2"> <img src="<?php  echo get_field('img6_2');   ?>">
	</div>	
</section>




<section id="seven">
	<div class="container">	
		<div class="pp7">
	<div class="cal_cnop7">
			<div class="button"> <img src="<?php  echo get_field('button');   ?>">
<div class="krug">
	</div>
				<div class="cons">  <p class="conss">Получите <span class="besp">бесплатную</span> консультацию </p></div>
				<div class="telef"> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.77977 7.80095C6.29842 8.86129 7.15792 9.71689 8.2206 10.2307C8.29835 10.2675 8.38436 10.2835 8.47015 10.277C8.55595 10.2705 8.63857 10.2418 8.7099 10.1937L10.2746 9.15028C10.3438 9.10414 10.4234 9.07598 10.5063 9.06838C10.5891 9.06077 10.6725 9.07394 10.749 9.10671L13.6763 10.3613C13.7757 10.4035 13.8588 10.4769 13.9128 10.5705C13.9669 10.664 13.9892 10.7726 13.9762 10.8798C13.8837 11.6038 13.5304 12.2693 12.9826 12.7516C12.4347 13.2339 11.7299 13.5 11 13.5C8.74566 13.5 6.58365 12.6045 4.98959 11.0104C3.39553 9.41635 2.5 7.25434 2.5 5C2.50004 4.27011 2.76612 3.56526 3.24843 3.01742C3.73073 2.46959 4.39618 2.11634 5.12019 2.02381C5.22745 2.01083 5.33602 2.03306 5.42955 2.08715C5.52307 2.14124 5.59649 2.22426 5.63873 2.3237L6.89439 5.25357C6.92687 5.32935 6.9401 5.41199 6.93291 5.49413C6.92572 5.57626 6.89833 5.65535 6.85318 5.72434L5.81341 7.31307C5.76608 7.38454 5.73811 7.46706 5.73221 7.55257C5.72631 7.63809 5.7427 7.72367 5.77977 7.80095Z" fill="white" fill-opacity="0.8" stroke="white" stroke-opacity="0.8" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
 </div>
				<div class="ved"> <p class="vedd">Введите ваш номер телефона </p> </div>
				<hr>
				<div class="bot"><p class ="tex">Получить консультацию</p> </div>

				</div>
</div>


<div class="metka">
<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M48.75 24.375C48.75 41.25 30 54.375 30 54.375C30 54.375 11.25 41.25 11.25 24.375C11.25 19.4022 13.2254 14.6331 16.7417 11.1167C20.2581 7.60044 25.0272 5.625 30 5.625C34.9728 5.625 39.7419 7.60044 43.2583 11.1167C46.7746 14.6331 48.75 19.4022 48.75 24.375V24.375Z" stroke="#FFA83E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M30 31.875C34.1421 31.875 37.5 28.5171 37.5 24.375C37.5 20.2329 34.1421 16.875 30 16.875C25.8579 16.875 22.5 20.2329 22.5 24.375C22.5 28.5171 25.8579 31.875 30 31.875Z" stroke="#FFA83E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</div>


		</div>
	<div class="adress6"><?php  echo get_field('adress6');   ?></div>

	</div>	
</section>


<section id="hooter">
	<div class="container">	
		<div class="pp8">
			<hr>
					<div class="colonki">
				<div class="logo_hoot">
				<?php
			the_custom_logo();
			?></div>
					<div class="hoot1"><?php  echo get_field('hoot1');   ?></div>
						<div class="hoot2"><?php  echo get_field('hoot2');   ?></div>
						<div class="hoot3"><?php  echo get_field('hoot3');   ?></div>	
			</div>
		</div>
	</div>	
</section>

	</main><!-- #main -->
