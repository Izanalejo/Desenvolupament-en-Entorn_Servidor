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
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Invitation</title>
        </head>
            <body>
                <pre>
                    Dear {{name}},
                    I would like to invite you to my birthday party!
                    Please come next Friday at 18:00 to my house.
                    Sincerely,
                    Your best friend.
                </pre>
            </body>
        </html>
    END_OF_TEMPLATE;

    $invitation_array = make_invitations($invitation_template, $namesArray);

    foreach ($invitation_array as $name => $invitation) {
        echo "<pre>$invitation</pre>";
    } 
    /* echo "<pre>";
    print_r($invitation_array); 
    echo "</pre>"; */
}


//---------------------------------------------------------------------------

main();

//--------------------------------------------------------------------------
?>

