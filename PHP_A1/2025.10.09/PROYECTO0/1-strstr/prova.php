<?php
function make_invitations(string $invitations_template, array $array_names): array{
    $invitations_array = [];

    foreach($array_names as $name){
        $invitation = strtr($invitations_template, ['{{name}}' => $name]);
        $invitations_array[$name] = $invitation;
    }
    return $invitations_array;
}

function main(): void{
    $array_names = ['Izan', 'Lucia', 'Xavi', 'Tania', 'Alex'];

    $invitations_template = <<<HERE

    Dear {{name}},
    I wish you a Happy holidays, 

    sincerely,

    Izan

    HERE;

    $invitations_array = make_invitations($invitations_template, $array_names);

    
}
?>