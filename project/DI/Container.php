<?php

namespace DI;

class Container
{
    private const excludeFiles = [
        '.',
        '..',
        'public',
        'Application',
        'DI',
        'autoload.php',
        'dependencies.php'
    ];

    private array $map;

    public function addToMap(string $class): void
    {
        $implementedClasses = class_implements($class);
        foreach ($implementedClasses as $implementedClass)
        {
            $this->map[$implementedClass][$class] = $class;
        }
    }

    public function getMap(): array
    {
        return $this->map;
    }

    /**
     * @throws \ReflectionException
     */
    public function generateDependencies(): void
    {
        chdir('..');
        $dir = getcwd();
        $list = [$dir];
        while ($list) {

            $item = array_shift($list);
            $dirList = scandir($item);

            foreach ($dirList as $listItem) {
                if (in_array($listItem, self::excludeFiles)) {
                    continue;
                }

                $el = $item . '/' . $listItem;
                if (is_file($el)) {
                    $reflectionClass = new \ReflectionClass(str_replace(['/', '.php'], ['\\', ''], str_replace('/app', '', $el)));
                    continue;
                }

                $list[] = $item . '/' . $listItem;
            }
        }
        if (!file_exists('dependencies.php')) {
            file_put_contents('dependencies.php', "<?php \n");
            file_put_contents('dependencies.php', 'return ' . var_export($this->map, true) . ';', FILE_APPEND);
        }
        die('asd');
    }
}