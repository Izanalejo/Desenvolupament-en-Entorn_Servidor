<?php
declare(strict_types=1);

// Basic Templates
// ---------------
// v1: Party invitations using string interpolation.

// URLs:
// - https://wiki.php.net/rfc/deprecate_dollar_brace_string_interpolation


/**
 * Generates the invitations. The invitation is a local variable inside the loop.
 *
 * @param  array  $name_array  Names (strings) of the people to be invited.
 * @return array               Invitations (strings) of the people to be invited.
 */
// --------------------------------------------------------------------
function make_invitations(array $name_array): array {

    $invitation_array = [];

    foreach($name_array as $name) {

        $invitation = <<<END_OF_TEMPLATE
        Dear $name,
   
        I would like to invite you to my birthday party!
        Please come next Friday at 18:00 to my house.
   
        Sincerely,
        Your best friend,

        Izan
   
        END_OF_TEMPLATE;
   
        $invitation_array[$name] = $invitation;
    }

    return $invitation_array;
}

// --------------------------------------------------------------------
function main(): void {

    $name_array = ['John', 'Mary', 'Lucy', 'Ryan'];  // Evaristo ;)

    echo "<pre>";
    foreach($name_array as $name) {
        $invitation_array = make_invitations($name_array);
        echo $invitation_array[$name] . "<br><br>";
    }

}
// --------------------------------------------------------------------
main();
// ---------