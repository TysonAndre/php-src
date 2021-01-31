--TEST--
097: 'namespace;' allowed to mark start of global namespace
--FILE--
<?php

// Previously, you could only use namespace{ } blocks to combine code
// in the global namespace with other namespaces in a single file,
// even when you would have preferred not to.
// (e.g. in code stub generation tools, or code concatenation tools)
namespace;

printf("Namespace = %s\n", json_encode(__NAMESPACE__));

namespace My\Project;

printf("Namespace = %s\n", json_encode(__NAMESPACE__));

namespace;

printf("Namespace = %s\n", json_encode(__NAMESPACE__));
?>
--EXPECT--
Namespace = ""
Namespace = "My\\Project"
Namespace = ""
