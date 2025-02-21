<?php

namespace MyProject;

interface AnotherFileInterface {
    public function doInterfaceThing();
}

class AnotherFile implements AnotherFileInterface {
    public function doInterfaceThing() {
        return 'Interface Implementation!';
    }
}
