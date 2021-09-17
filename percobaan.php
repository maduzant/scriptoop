<!DOCTYPE html>
<html>
<body bgcolor="yellow">
  <h1>Make yourself attractive!!</h1>
  <h2>Pricelist Girl</h2>

<?php
  class PricelistGirl{
  public $name;
  protected $harga;
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
    function set_harga($harga) {
    $this->harga = $harga;
  }
  function get_harga() {
    return $this->harga;
  }

}



$Haircut = new PricelistGirl();
$HairStyling= new PricelistGirl();
$HairMassage = new PricelistGirl();
$HairTrim = new PricelistGirl();
$HairColoring = new PricelistGirl();

$Haircut->set_name('Haircut: '); $Haircut->set_harga('Rp.45.000');
$HairStyling->set_name('HairStyling : '); $HairStyling->set_harga('Rp.90.000');
$HairMassage->set_name('HairMassage: '); $HairMassage->set_harga('Rp.100.000');
$HairTrim->set_name('HairTrim : '); $HairTrim->set_harga('Rp.60.000');
$HairColoring ->set_name('HairColoring  : '); $HairColoring ->set_harga('Rp.70.000');

echo $Haircut->get_name();
echo $Haircut->get_harga();
echo "<br>";
echo $HairStyling->get_name();
echo $HairStyling->get_harga();
echo "<br>";
echo $HairMassage->get_name();
echo $HairMassage->get_harga();
echo "<br>";
echo $HairTrim->get_name();
echo $HairTrim->get_harga();
echo "<br>";
echo $HairColoring->get_name();
echo $HairColoring->get_harga();
echo "<br>";


class Men extends PricelistGirl{
  public function message(){
    echo "Make yourself valuable";
  }
}
$makeup = new Men("Best Choice");  // OK. __construct() is public
$makeup->message(); // OK. message() is public
?>

<h3>Pricelist Men </h3>
<?php
interface Pricelist{
public function __construct($name, $harga);

}
class PricelistMen implements Pricelist {
  public $name;
  public $harga;
  public static function Order(){}
  public static $value = "Text via instagram";
  function __construct($name, $harga) {
    $this->name = $name;
    $this->harga = $harga;
  }
  function __destruct() {
    echo "{$this->name} = {$this->harga}.";
  }
}
echo $Haircut= "Haircut = Rp.40.000"; echo "<br>";
echo $Hairtrim = "Hairtrim = Rp.20.000"; echo "<br>";
echo $HairMassage = "HairMassage = Rp.35.000"; echo "<br>";
echo "Choose Your Favorite!"; echo "<br>";
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

?>
</body>
</html>