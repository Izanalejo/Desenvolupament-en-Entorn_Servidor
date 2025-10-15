<?php
/**
 * Generar invitaciones en ficheros .html
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

    $invitation_template = file_get_contents('generate.view.html');

    $invitation_array = make_invitations($invitation_template, $namesArray);

    foreach ($invitation_array as $name => $invitation) {
        // CORREGIDO: usar ruta relativa "output/" en lugar de "/output/"
        file_put_contents("output/$name.html", $invitation);
        echo "La invitación del amigo: $name se ha creado correctamente. <br>";
    } 
}
//---------------------------------------------------------------------------

main();

//--------------------------------------------------------------------------
?>