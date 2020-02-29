<?php
final class Employee
{
    private $first_name;
    private $last_name;
    private $emp_no;

    public function __construct(string $first_name, string $last_name, int $emp_no)
    {
        $this->ensureIsValidId($emp_no);
        $this->emp_no = $emp_no;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }


    public function __toString(): string
    {
        return "(" . $this->emp_no . ")" . $this->first_name . " " . $this->last_name;
    }

    private function ensureIsValidId(int $emp_no): void
    {
        if ($emp_no <= 1000) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid user identifier',
                    $emp_no
                )
            );
        }
    }
}

?>