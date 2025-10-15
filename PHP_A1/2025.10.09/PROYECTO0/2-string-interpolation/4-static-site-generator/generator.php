<?php 
declare(strict_types=1);
require_once(__DIR__ . '/utils.php');
// v4: Static Site Generator: Writes to disk all html files.
//     index.html is written manually.


// Result is an associative array: name => its invitation.
// --------------------------------------------------------------------
function make_invitations(string $template_filename, array $name_array): array {

    $result = [];

    foreach($name_array as $name) {
        $invitation    = render_template($template_filename, ['name' => $name]);
        $result[$name] = $invitation;
    }

    return $result;
}

// --------------------------------------------------------------------
function save_invitations(array $invitation_array): void {

    foreach($invitation_array as $name => $invitation) {
        file_put_contents("./output/$name.html", $invitation);
    }
}

// --------------------------------------------------------------------
function main(): void {

    $template_filename = "generator.template.php";
    $name_array        = ['John', 'Mary', 'Lucy', 'Ryan'];

    $invitation_array  = make_invitations($template_filename, $name_array);
    save_invitations($invitation_array);

}
// --------------------------------------------------------------------
main();
// --------------------------------------------------------------------

?>