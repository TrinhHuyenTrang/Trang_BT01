<?php
// bài 1
    echo "Bài 1. ";
    function isPrimeNumber($m){
        if(is_int($m)){
            if($m<2){
                return false;
            }
            for($i=2; $i<= sqrt($m); $i++){
                if($m % $i ==0){
                    return false;
                }
            }
            return true;
        }
    }
    echo "Các số nguyên tố từ 1-100 là: ";
    for ($i=1; $i<= 100; $i++){
        if(isPrimeNumber ($i) == true){
            echo $i. " ";
        }
    }
// bài 2
    echo"<br>";
    echo "2. ";
    $products = array(
        $arr1 = array("name"=>"Sữa", "price"=> 24000, "quantity"=>10),
        $arr1 = array("name"=>"Muối", "price"=> 4000, "quantity"=>10),
        $arr1 = array("name"=>"Mỳ", "price"=> 3000, "quantity"=>10)
    );
    function displayInfo($array){
        echo "Thông tin sản phẩm: <br>";
        foreach ($array as $product){
            echo " Tên sảm phẩm: " .$product['name']. ", Giá: " .$product['price']. ", Số lượng: " .$product['quantity'];
            echo "<br>";
        }
    }
    displayInfo($products);
    function sum($array){
        $total=0;
        foreach($array as $product){
            $total=$total + $product['price'] * $product['quantity'];
        }
        echo $total;
    }
    echo " Giá trị của các sản phẩm là: ";
    sum($products);
?>