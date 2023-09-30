<?php 
                session_start();
				if(!isset($_SESSION['name']))
				{
				   header('location:view/index.php');
				}
                else
                  header('location:view/home.php');
                   
?>