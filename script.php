<?php

$cookie_name = "TheDressPoll";  //Setting Cookie's Name.
$cookie_value = "casted";   //Setting Cookie's Value.

if(isset($_POST['poll'])) {

    if(!isset($_COOKIE[$cookie_name])) {

                                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //Creating Cookie In User's System.

                                    $file = "./counter.txt";    //Checking : IF file is there then OK ELSE Create a new file.

                            $document = file_get_contents($file);   // Getting File Contents.

                            $vote = explode(",", $document);    //Exploding Values By Comma & Storing Values In Array.

                            $pollresult=$_POST['poll'];

                                        if($pollresult=='wg') {
                                        
                                            $vote[0]++;
                                        
                                        }
                                        else if($pollresult=='bb') {
                                        
                                            $vote[1]++;
                                        }
                                        else {
                                        
                                            $vote[2]++;
                                        }
                                        
                                        file_put_contents($file, $vote[0].",".$vote[1].",".$vote[2]);
                                        
                                        $total = $vote[0]+$vote[1]+$vote[2];


                                        for($p=0;$p<3;$p++)
                                            $vote[$p] = ($vote[$p]/$total)*100; //Calculating %age Of Each Voting.
                                                    
                                                   // header('location:share.php');



            echo '<script type="text/javascript">window.location="http://thedresspoll.com/share.php";</script>';
  

                                }
    else {
            
            echo '<script type="text/javascript">alert("This vote is not casted, you have already voted.");</script>';
    }
}
