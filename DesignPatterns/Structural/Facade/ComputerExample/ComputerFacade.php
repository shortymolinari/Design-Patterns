<?php 

namespace DesignPatterns\Structural\Facade\ComputerExample;

class ComputerFacade
{
    protected $computer;
    protected $process = [];

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn()
    {
        $this->cleanProcess();
        $this->process[] = $this->computer->getElectricShock();
        $this->process[] = $this->computer->makeSound();
        $this->process[] = $this->computer->showLoadingScreen();
        $this->process[] = $this->computer->bam();

        return $this->printProcess();
    }

    public function turnOff()
    {
        $this->cleanProcess();
        $this->process[] = $this->computer->closeEverything();
        $this->process[] = $this->computer->pullCurrent();
        $this->process[] = $this->computer->sooth();

        return $this->printProcess();
    }

    private function cleanProcess() {
        $this->process = [];
    }

    private function printProcess() {
        return $this->process;
    }
}