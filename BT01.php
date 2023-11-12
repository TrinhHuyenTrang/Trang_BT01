<?php
// 6. Sắp xếp theo thứ tự tăng dần
    echo " 6. ";
    function ascArray($array){
        sort($array);
        echo "Mảng sắp xếp theo thứ tự tăng dần là: ";
        foreach($array as $value){
            echo $value. " " ;
        }
        
    }
    $numbers=array(1,2,33,45,12,7,9,0,12);
    ascArray($numbers);
// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
    echo "<br>";
    echo " 7. ";
    function giaiThua($n){
        $giai_thua=1;
        if (is_int($n)&& $n>0){
            for($i=2; $i<=$n; $i++){
                $giai_thua=$giai_thua * $i;
            }
            echo "Giai thừa của " .$n. " là: " .$giai_thua;
        }else{
            echo $n. " không phải là số nguyên dương.";
        }
    }
    $n= 3;
    giaiThua($n);
// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
    echo "<br>";
    echo " 8. ";
    function isPrimeNumber($m){
        if($m<2){
            return 0;
        }
        for($i=2; $i<= sqrt($m); $i++){
            if($m % $i ==0){
                return 0;
            }
        }
        return 1;
    }
    echo "Các số nguyên tố từ 1-20 là: ";
    for ($i=0; $i< 20; $i++){
        if(isPrimeNumber ($i) ==1){
            echo $i. " ";
        }
    }
// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
    echo "<br>";
    echo " 9. ";
    function sumNumber($array){
        $sum1=0;
        foreach($array as $value){
            $sum1 = $sum1 + $value ;
        }
        echo "Tổng của các số trong mảng là: " .$sum1;
    }
    $numbers=array(1,2,3,15,12,7,9,0,12,4);
    sumNumber($numbers);
// 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
    echo "<br>";
    echo " 10. ";
    function fibonacci($n) {
        $f0 = 0;
        $f1 = 1;
        $fn = 1;
    
        if ($n < 0) {
            return - 1;
        } else if ($n == 0 || $n == 1) {
            return $n;
        } else {
            for($i = 2; $i < $n; $i ++) {
                $f0 = $f1;
                $f1 = $fn;
                $fn = $f0 + $f1;
            }
        }
        return $fn;
    }
    echo ("10 số đầu tiên của dãy số fibonacci: ");
    for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");}
// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
    echo "<br>";
    echo " 11. ";    
    function isArmstrong($num02){
        $a=$num02;
      
        if($num02>0){
            $count = 0;// đếm số chữ số
            do{
                $count++;
                $num02 /= 10;
            }while($num02>1);
        echo "Số có " .$count. " chữ số<br>";
        }else{
            echo " Nhap so duong.";
        }
        if($a>0){
            $so_mu = $count;
            $trung_gian = $a;
            $sum_luy_thua = 0;
            while ($a>0){
                $x = $a % 10;// lấy từng chữ số của số hay lấy phần dư
                $sum_luy_thua = $sum_luy_thua + pow($x, $so_mu);
                $a /= 10;
            }
            if($trung_gian == $sum_luy_thua){
                echo $trung_gian. " là số Armstrong";
            }else{
                echo $trung_gian. " không là số Armstrong";
            }
        }else{
            echo "Nhập số dương.";
        }
    }
    isArmstrong(371);
// 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
    echo "<br>";
    echo " 12. ";
    $array_first = [1,3,6,23,43];
    echo "Mảng ban đầu";
    var_dump($array_first);
    echo "<br>";
    $phan_tu_chen = 10;
    array_splice($array_first, 4, 0, $phan_tu_chen);
    echo "Mảng sau khi chèn: ";
    var_dump($array_first);
// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
    echo "<br>";
    echo " 13. ";
    $input01s=array(1,2,3,15,3,15,12,7,9,0,12,4);
    $result001=array_unique($input01s);
    var_dump($result001);
    
// 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
    echo "<br>";
    echo " 14. ";
    function findPosition($array, $number14){
        foreach($array as $position => $value){
            if($number14==$value){
                echo  $number14. " ở vị trí thứ " .$position. " trong mảng.<br>";
            }
        }
    }
    $numbers=array(1,1,3,15,12,7,9,0,12,1);
    findPosition($numbers,1);
// 15. Viết chương trình PHP để đảo ngược một chuỗi.
    echo "<br>";
    echo " 15. ";
    function revString($name){
        echo"Chuỗi đảo ngược: " .strrev($name);
        echo "<br>";
    }
    revString("Hello World");
// 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
    echo "<br>";
    echo " 16. ";
    function countNumber($array){
        $count01= count($array);
        echo "Số lượng của các số trong mảng là: " .$count01;
    }
    $numbers=array(1,2,3,15,12,7,9,0,12,4);
    countNumber($numbers);
// 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.(chuỗi đối xứng)
    echo "<br>";
    echo " 17. ";
    function testPalinString($string){
        echo "Chuỗi: " .$string;
        if($string==strrev($string)){
            echo "<br>Đây là chuỗi Palindrome";
        }else{
            echo "<br>Đây không là chuỗi Palindrome";
        }
    }

    testPalinString("abc cba");
// 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
    echo "<br>";
    echo " 18. ";
    function countValue($array1){
        $array2 = array_count_values($array1);
        print_r($array2) ;
    }
    $numbers=array(1,1,3,15,12,7,9,0,12,1);
    countValue($numbers);
// 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
    echo "<br>";
    echo " 19. ";
    function descArray($array){
        rsort($array);
        echo "Mảng sắp xếp theo thứ tự giảm dần là: ";
        foreach($array as $value){
            echo $value. " " ;
        }
        
    }
    $numbers=array(1,2,33,45,12,7,9,0,12);
    descArray($numbers);
// 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng
    echo "<br>";
    echo " 20. ";
    $number20s=array(3,15,12,1);
    $number20s[] = 20;//thêm vào cuối mảng
    var_export($number20s);
// 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
//xóa số lớn nhất
    echo "<br>";
    echo " 21. ";
    function findSecond($array){
        $max=$array[0];
        $tgian=0;
        foreach($array as $k=>$value){
            if($value>$max){
                $max=$value;
                $tgian=$k;
            }
            
        }
        unset($array[$tgian]);// xóa phần tử lớn nhất
        var_dump($array); echo "<br>";
        $second=$array[0];
        foreach($array as $value){
            if($value>$second){
                $second=$value;
            }
        }
        echo "Số lớn thứ hai trong mảng là: " .$second;
    }
    $numbers_21=array(1,-2,3,-15,-12,7,-9,20,12,4,35,-35);
    findSecond($numbers_21);
// 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
    echo "<br>";
    echo " 22. ";
    function USCLN($a, $b) {
        if ($b == 0) return $a;
        return USCLN($b, $a % $b);
    }   
    function BSCNN($a, $b) {
        return ($a * $b) / USCLN($a, $b);
    }
    $a = 15;
    $b = 40;
        // tính USCLN của a và b
    echo "USCLN của $a và $b là: " . USCLN($a, $b) . "<br>";
        // tính BSCNN của a và b
    echo "BSCNN của $a và  $b là: " . BSCNN($a, $b);
    
// 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
    echo "<br>";
    echo " 23. ";
    function findPerfect($n){
        $total=1;
        for($i=2; $i<$n;$i++){
            if($n % $i == 0){
                $total=$total+$i;
            }
        }
        if($total==$n && $n != 0){
            echo $n. " là số hoàn hảo.";
        }else{
            echo $n. " không là số hoàn hảo.";
        }
    }
    $n=28;
    findPerfect($n);
// 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
    echo "<br>";
    echo " 24. ";
    function findMaxOdd($array){
        $max_odd=$array[0];
        foreach($array as $value){
            if($value % 2 !== 0 ){
                if($value>$max_odd){
                    $max_odd=$value;
                }
            }
        }
        echo "Số lẻ lớn nhất trong mảng là: " .$max_odd;
    }
    $numbers_24=array(1,-2,3,-15,-12,7,-9,20,12,4,35,-35);
    var_dump($numbers_24); echo "<br>";
    findMaxOdd($numbers_24);
// 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
    echo "<br>";
    echo " 25. ";
    $n=11;
    if(isPrimeNumber($n)==1){
        echo $n. " là số nguyên tố.";
    }else{
        echo $n. " không là số nguyên tố.";
    }
// 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
    echo "<br>";
    echo " 26. ";
    function findMaxPositive($array){
        $max_positive=$array[0];
        foreach($array as $value){
            if($max_positive>0){
                if($value>$max_positive){
                    $max_positive=$value;
                }
            }
        }
        echo "Số dương lớn nhất trong mảng là: " .$max_positive;
    }
    $numbers_26=array(1,-2,3,-15,-12,7,-9,0,12,4);
    var_dump($numbers_26); echo "<br>";
    findMaxPositive($numbers_26);
// 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
    echo "<br>";
    echo " 27. ";
    function findMaxNegative($array){
        $max_negative=$array[0];
        foreach($array as $value){
            if($value<0){
                $max_negative=$value;
                break;
            }
            if($max_negative<0){
                
                if($value>$max_negative){
                    $max_negative=$value;
                }
            }
        }
        echo "Số âm lớn nhất trong mảng là: " .$max_negative;
    }
    $numbers_27=array(1,-2,3,-15,-12,7,-9,0,12,4);
    var_dump($numbers_27); echo "<br>";
    findMaxNegative($numbers_27);
// 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
    echo "<br>";
    echo " 28. ";
    function sumSoLe($n){
        $sumle=0;
        for($i=1; $i<=$n; $i++){
            if($i % 2 !== 0){
                $sumle = $sumle + $i;
            }
        }
        echo " Tổng từ 1 - " .$n. " là: " .$sumle;
    }
    sumSoLe(10);
// 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
    echo "<br>";
    echo " 29. ";
    function squareNumber($n){
        if($n>=0){
            $a=sqrt($n);
            if($a * $a==$n){
                echo $n;
            }
        }else{
            echo "Nhập số dương.";
        }
    }
    $b=10;
    echo "Các số chính phương từ 0-" .$b. " là: " ;
    for($j = 0; $j<=$b; $j++){
        squareNumber($j);
        echo " ";
    }
// 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
    echo "<br>";
    echo " 30. ";
    function checkIfExist($word, $string){
        if(strpos( $string, $word) !== false){
            echo  $word. " là chuỗi con của " .$string;
        }else{
            echo  $word. " không là chuỗi con của " .$string;
        }
    }
    $word="Trang";
    $string="Trinh Trang";
    checkIfExist($word, $string);
?>