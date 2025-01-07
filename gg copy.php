// <?php
// class Text{

//     public function __construct(
//         public String $name="Name",
//         public int $age=33
//     );
// }

// //error shown in this

// //


// ?>


<?php
class Text {

    public function __construct(
        public string $name = "Name",
        public int $age = 33
    ) {
        // You can add any initialization logic here if needed.
    }
}

// Create an instance of the Text class
$text = new Text();
echo $text->name; // Output: Name
echo $text->age;  // Output: 33
?>


//corrected 
