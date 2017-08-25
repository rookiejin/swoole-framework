<?php


class A{

    public $req ;

    public $res ;

    public function __construct($req,$res)
    {
        $this->req = $req ;

        $this->res = $res ;
    }

    public function bootstrap()
    {
        $this->req = null ;

        $this->res = null ;
    }
    
}


class B{

    protected $di ;

    public function has($id)
    {
        return isset($this->di[$id]) ;
    }

    public function get($id)
    {
        return $this->di [$id];
    }

    protected function make($class,$userParams = [])
    {
        $reflector = new \ReflectionClass($class);
        $construct = $reflector->getConstructor();
        $params = $construct->getParameters();
        if(count($params) > 0)
        {
            $args = [];
            foreach ($params as $param)
            {
                $name = $param->getName();
                if(isset($userParams[$name])){
                    $args [$name] = $userParams[$name];
                }
            }
            $newClass = $reflector->newInstanceArgs($args);
        }
        else{
            $newClass = $reflector->newInstance();
        }
        $this->di [$class] = $newClass ;
        return $newClass ;
    }

    public function cloneObject($className ,$userParams = [])
    {
        if($this->has($className))
        {
            $class = clone $this->get($className);

            if(method_exists($class,'bootstrap'))
            {
                $class->bootstrap();
            }
            call_user_func_array([$class ,'__construct'],$userParams);
            return $class;
        }
        else{
            return $this->make($className,$userParams);
        }
    }
}

$b = new B();

$b1 = $b->cloneObject(A::class,['req' => 'req1' ,'res' => 'res1']);

$b2 = $b->cloneObject(A::class,['req' => 'req2' ,'res' => 'res2']);

var_dump($b1);
$b2->req = "xxx";
var_dump($b2);
var_dump($b1);