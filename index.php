<?php
// modifications de verifications pour l'add commint push dans remote
    $dictionary =
    [
        'cat'    => 'chat',
        'dog'    => 'chien',
        'monkey' => 'singe',
        'sea'    => 'mer',
        'sun'    => 'soleil'
    ];

    //echo $_GET['word'];
    /*
    echo $dictionary['cat'];
    echo $dictionary['dog'];
    echo $dictionary['monkey'];
    echo $dictionary['sea'];
    echo $dictionary['sun'];*/
    
    /*
        array_key_exists ou key_exists
        Verifier qu'une clé existe dans un tableau associatif 
        [ 'key' => 'value']
        ['value1','value2']
        in_array
        Verifier qu'une valeur existe dans un tableau ou tableau associatifs
    */

    
    if( $_GET['direction'] == 'toFrench' && 
        array_key_exists($_GET['word'], $dictionary) == true )
    {
        // clé => valeur
        echo $dictionary[$_GET['word']];
    }
    else if( $_GET['direction'] == 'toEnglish' &&
     in_array( $_GET['word'] , $dictionary ) )
    {
        // valeur => clé
        echo array_search( $_GET['word'], $dictionary );
    }
    else 
    {
        echo "le mot n'existe pas";
    }
    
	/*--------- Version 2 ---
    
    if( $_GET['direction'] == 'toFrench')
     {
        if( array_key_exists($_GET['word'], $dictionary) == true)
        {
            echo $dictionary[$_GET['word']];
        }
        else 
        {
            echo 'le mot n existe pas';
        }
        
     }
     else 
     {
        if( in_array( $_GET['word'] , $dictionary ) )
        {
           echo array_search( $_GET['word'], $dictionary );
        }
        else 
        {
            echo 'le mot n existe pas';
        }
     }
*/
?>