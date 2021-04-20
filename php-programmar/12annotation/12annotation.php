<?php
//interface ActionHandler
//{
//    public function execute();
//}
//
//#[Attribute]
//class SetUp {}
//
//class CopyFile implements ActionHandler
//{
//    public string $fileName;
//    public string $targetDirectory;
//
//    #[SetUp]
//    public function fileExists()
//    {
//        if (!file_exists($this->fileName)) {
//            throw new RuntimeException("File does not exist");
//        }
//    }
//
//    #[SetUp]
//    public function targetDirectoryExists()
//    {
//        mkdir($this->targetDirectory);
//    }
//
//    public function execute()
//    {
//        copy($this->fileName, $this->targetDirectory . '/' . basename($this->fileName));
//    }
//}
//
//function executeAction(ActionHandler $actionHandler)
//{
//    $reflection = new ReflectionObject($actionHandler);
//
//    //??????
//    foreach ($reflection->getMethods() as $method) {
//        $attributes = $method->getAttributes(SetUp::class);
//
//        if (count($attributes) > 0) {
//            //?????
//            $methodName = $method->getName();
//
//            $actionHandler->$methodName();
//        }
//    }
//
//    $actionHandler->execute();
//}
//
//$copyAction = new CopyFile();
//$copyAction->fileName = "/tmp/foo.jpg";
//$copyAction->targetDirectory = "/home/user";
//
//executeAction($copyAction);


//#[Attribute]
//class MyAttribute
//{
//    public $value;
//
//    public function __construct($value)
//    {
//        $this->value = $value;
//    }
//}

#[MyAttribute(value: 1234)]
class Thing
{
}

function dumpAttributeData($reflection)
{
    //php8.0
    $attributes = $reflection->getAttributes();

    foreach ($attributes as $attribute) {
        var_dump($attribute->getName());
        var_dump($attribute->getArguments());
        var_dump($attribute->newInstance());
    }
}

dumpAttributeData(new ReflectionClass(Thing::class));