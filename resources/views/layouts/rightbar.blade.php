<?php

$promotions = \DB::table('promotions')->inRandomOrder()->get();

$i = 0;

foreach ($promotions as $promotion) {
	if( $i<=3 )
	{	

		$num1 = rand(25, 99);
		$num2 = rand(0,5);
		$num3 = rand(6, 11);
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'));
		$max = count($characters) - 1;
		for ($x = 0; $x< 3; $x++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}

		$kupon = ($num1 - $num2) . $str . ($num1 - $num3);
		$discountprice = ($promotion->price) - ($promotion->price)*0.1;

		$text = <<<TEXT
		<div class="wraper">
			<div class="holder">
				<h2>$promotion->title</h2>
				<span class="discount-price">Цена: $promotion->price </span><br />
				<a href="">$promotion->seller</a>
			</div>
			<div class="block">
				<h2>$promotion->title</h2>
				<span class="discount-price">Цена: $discountprice </span><br />
				<span>Купон на скидку: $kupon <br />примените и получите скидку 10%</span><br />
				<a href="">$promotion->seller</a>
			</div>
</div>
TEXT;

		echo $text;
	}
	$i++;
}

?>