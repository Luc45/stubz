<?php

namespace NamespaceCollisionOne {
    class Thing {
        public function identify(): string {
            return "I am Thing in NamespaceCollisionOne";
        }
    }
}

namespace NamespaceCollisionTwo {
    class Thing {
        public function identify(): string {
            return "I am Thing in NamespaceCollisionTwo";
        }
    }
}

namespace NamespaceCollisionConsumer {
    use NamespaceCollisionOneThing as ThingOne;
    use NamespaceCollisionTwoThing as ThingTwo;

    class Consumer {
        public function process(): array {
            $one = new ThingOne();
            $two = new ThingTwo();
            return [
                $one->identify(),
                $two->identify(),
            ];
        }
    }
}
