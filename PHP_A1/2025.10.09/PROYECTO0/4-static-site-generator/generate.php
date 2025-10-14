<?php
/**
 * Generar invitaciones  en ficheros .txt
 */

//-------------------------------------------------------------------------
function make_invitations(string $invitation_template, array $namesArray): array{
    $invitations_array = [];
    foreach($namesArray as $name){
        $invitation = strtr($invitation_template, ['{{name}}' => $name]);
        $invitations_array[$name] = $invitation;
    }
    return $invitations_array;
}


//-------------------------------------------------------------------------
function main(): void{
    $namesArray = ['John', 'Mary','Lucy','Ryan'];

    $invitation_template = <<<END_OF_TEMPLATE
    Dear {{name}}, 

    I Would like to invite you to my birthday party!
    Please come next friday at 18:00 to my house.

    Sincerely, 
    your best friend
    Izan.

    END_OF_TEMPLATE;

    $invitation_array = make_invitations($invitation_template, $namesArray);

    foreach ($invitation_array as $name => $invitation) {
        file_put_contents("$name.txt" ,$invitation);
        echo "La invitación del amigo: $name se ha creado correctamente. <br>";
    } 
}
//---------------------------------------------------------------------------

main();

//--------------------------------------------------------------------------










?>