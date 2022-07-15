<?php 

echo "<pre>";

// class foo {
//     var $bar = "I am bar.";
//     var $arr = array('I am A.','I am B.','I am C.');
//     var $r = 'I am r.';
// }

// $foo = new foo();
// $bar = 'bar';
// $baz = array('foo','bar','baz','quux');
// echo $foo->$bar . "\n";
// echo $foo->{$baz[1]} . "\n";


// $start = 'b';
// $end = 'ar';
// echo $foo->{$start . $end} . "\n";

// $arr = 'arr';
// echo $foo->{$arr[1]}. "\n";

// $nameTypes = array("first", "second", "third");
// $name_first = "Naing";
// $name_second = "Lynn";
// $name_third = "Aung" ;

// foreach($nameTypes as $type)
//     print ${"name_$type"} . "\n";
 

// class Foo {
//     public static function hello(){
//         echo "Hello World";
//     }
// }
// $my_foo = 'Foo';
// $my_foo::hello();

// $_POST['asdf'] = 'something';

// function test(){
//     var_dump($_POST);


// }
// $string = '_POST';
// var_dump(${$string});

// test();

// $price_for_monday = 10;
// $price_for_tuesday = 20;
// $price_for_wednesday = 30;

// $today = 'tuesday';
// $price_for_today = ${'price_for_' . $today};
// echo "today price is " . $price_for_today;



// $var_name = "new_variable_1";
// $$var_name = "value 1";

// echo "VARIABLE: " . $var_name;
// echo '<br>';
// echo "VARIABLE: " . $$var_name;
// echo '<br>';

$obj_1 = array("one"=>"One", "two"=>"Two", "three"=>"Three");
$obj_2 = array("one"=>"Four", "two"=>"five", "three"=>"Six");
$obj_3 = array("one"=>"Seven", "two"=>"Eight", "three"=>"Nine");

for ($i=1; $i < 4; $i++) { 
    foreach(${"obj_".$i} as $key=>$value)
     {
        echo $key . ":" . $value."\n";
    }
}


class foo 
{
    function bar(){
        $bar1 = "var1";
        $bar2 = "var2";
        $this->{$bar1} = "this ";
        $this->{$bar2} =  "works";
    }
}

$test = new foo();
$test->bar();
echo $test->var1 . $test->var2;

$_POST['content_1'] = "blabla";
$_POST['content_2'] = "blublu";
$_POST['content_3'] = 'bleble';
for ($i=1; $i < 4; $i++) { 
    echo $_POST["content_".$i];
}