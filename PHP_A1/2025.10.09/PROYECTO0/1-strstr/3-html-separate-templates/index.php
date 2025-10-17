<?php
/**
 * Ejercicio 3: Invitaciones 2.0 en PHP (HTML separate TEMPLATES)
 */

function make_invitations(string $invitation_template, array $namesArray): array {
    $invitations_array = [];
    foreach($namesArray as $name){
        $invitation = strtr($invitation_template, ['{{name}}' => htmlspecialchars($name)]);
        $invitations_array[$name] = $invitation;
    }
    return $invitations_array;
}

function main(): void {
    $namesArray = ['John', 'Mary', 'Lucy', 'Ryan'];
    
    // Cargar plantilla HTML
    $invitation_template = file_get_contents('index.view.html');

    // Generar invitaciones personalizadas
    $invitation_array = make_invitations($invitation_template, $namesArray);

    foreach ($invitation_array as $invitation) {
        echo $invitation;
    }
}

main();
