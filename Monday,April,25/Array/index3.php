<!--
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
"France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", 
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 

Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin 
 -->

 <?php
$cities = array( 
"Italy"=>"Rome,  ", "South Korea"=>"Seoul.. ", "United Kingdom"=>"London,") ;
asort($cities) ;
foreach($cities as $country => $capitalCity)
{
echo "The capital  city of $country is $capitalCity <br>" ;
}
?>