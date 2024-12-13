<?php
    echo "<h2>MENU</h2>";
    class Menu{

        public function cargarOpcion($enlace, $nombreEnlace){
            $this->enlaces[]=$enlace;
            $this->titulos[]=$nombreEnlace;
        }
        public function mostrar(){
            echo "<ul>";
            for($i=0; $i<count($this->enlaces); $i++){
                echo '<li><a href='.$this->enlaces[$i] . '>' . $this->titulos[$i] . '</a></li>';
            }
            echo "</ul>";
        }
    }
    $menu1=new Menu();
        $menu1->cargarOpcion('http://www.google.com','Google');
        $menu1->cargarOpcion('http://www.yahoo.com','Yhahoo');
        $menu1->cargarOpcion('http://www.msn.com','MSN');
        $menu1->cargarOpcion('http://www.chatgpt.com','ChatGPT');
        $menu1->mostrar();
?>