<?php
declare(strict_types=1);

// Basic Templates
// ---------------
// v3: Using 'require' for separate HTML views.
//     This code uses side effects all the time. No pure functions. :(


/**
 * Generates the invitations. The invitation is loaded from disk.
 *
 * @param  array  $name_array  Names (strings) of the people to be invited.
 * @return array               Invitations (strings) of the people to be invited.
 */
// --------------------------------------------------------------------
function print_invitations(array $name_array): void {

    foreach($name_array as $name) {
        require 'index.template.php';
    }

}

// --------------------------------------------------------------------
function main(): void {

    $name_array = ['John', 'Mary', 'Lucy', 'Ryan'];  // Evaristo ;)
    print_invitations($name_array);

    // How to debug: Log to the server
    error_log(print_r('All invitations generated!', true));
    error_log(print_r($name_array, true));

}
// --------------------------------------------------------------------
main();
// --------------------------------------------------------------------
