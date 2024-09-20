<?php
function name(){
    $my_name="NIWAHA CATHERINE";
    return $my_name;
}
function my_age($c_year,$birth_year){
    $dob=05/07/2003;
    $age=$c_year-$birth_year;
    return $age;
}
function my_address(){
    $address="Kanungu-Katete";
    return $address;
}

print("welcome ".name()." to ".my_address());
print("<br> You are ".my_age(2024,2003)." years old");



?>