<?php
class StudentList implements IteratorAggregate {
    private array $list = [];

    public function getIterator(): Traversable {
        return new ArrayIterator($this->list);
    }

    public function add(Student $student): void {
        $this->list[] = $student;
    }
}