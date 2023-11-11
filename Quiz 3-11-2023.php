<?php

class Person {
    private string $name;
    private string $address;

    public function construct(string $name, string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function setAddress(string $address): void {
        $this->address = $address;
    }

    public function toString(): string {
        return "Person[name={$this->name}, address={$this->address}]";
    }
}

class Student extends Person {
    private string $program;
    private int $year;
    private float $fee;

    public function construct(string $name, string $address, string $program, int $year, float $fee) {
        parent::construct($name, $address);

        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    /
     * @Override
     */
    public function toString(): string {
        return "Student[Person[name={$this->name}, address={$this->address}], program={$this->program}, year={$this->year}, fee={$this->fee}]";
    }

    public function getProgram(): string {
        return $this->program;
    }

    public function setProgram(string $program): void {
        $this->program = $program;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function setYear(int $year): void {
        $this->year = $year;
    }

    public function getFee(): float {
        return $this->fee;
    }

    public function setFee(float $fee): void {
        $this->fee = $fee;
    }
}

class Staff extends Person {
    private string $school;
    private float $pay;

    public function construct(string $name, string $address, string $school, float $pay) {
        parent::construct($name, $address);

        $this->school = $school;
        $this->pay = $pay;
    }

    /
     * @Override
     */
    public function toString(): string {
        return "Staff[Person[name={$this->name}, address={$this->address}], school={$this->school}, pay={$this->pay}]";
    }

    public function getSchool(): string {
        return $this->school;
    }

    public function setSchool(string $school): void {
        $this->school = $school;
    }

    public function getPay(): float {
        return $this->pay;
    }

    public function setPay(float $pay): void {
        $this->pay = $pay;
    }
}
?>
<?php

abstract class Shape {
    protected float $width;
    protected float $height;

    public function construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public abstract function getArea(): float;
    public abstract function getPerimeter(): float;
}

class Circle extends Shape {
    protected float $radius;

    public function construct(float $radius) {
        parent::__construct(0.0, 0.0);
        $this->radius = $radius;
    }

    /
     * @Override
     */
    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }

    /
     * @Override
     */
    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle extends Shape {

    /
     * @Override
     */
    public function getArea(): float {
        return $this->width * $this->height;
    }

    /
     * @Override
     */
    public function getPerimeter(): float {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends Rectangle {

    /
     * @Override
     */
    public function getArea(): float {
        return $this->width * $this->width;
    }

    /
     * @Override
     */
    public function getPerimeter(): float {
        return 4 * $this->width;
    }
}
