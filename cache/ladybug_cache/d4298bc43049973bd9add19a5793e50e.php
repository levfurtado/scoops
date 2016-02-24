<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * Containerd4298bc43049973bd9add19a5793e50e
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class Containerd4298bc43049973bd9add19a5793e50e extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'environment_ajax' => 'getEnvironmentAjaxService',
            'environment_browser' => 'getEnvironmentBrowserService',
            'environment_cli' => 'getEnvironmentCliService',
            'environment_resolver' => 'getEnvironmentResolverService',
            'format_console' => 'getFormatConsoleService',
            'format_html' => 'getFormatHtmlService',
            'format_json' => 'getFormatJsonService',
            'format_php' => 'getFormatPhpService',
            'format_resolver' => 'getFormatResolverService',
            'format_text' => 'getFormatTextService',
            'format_xml' => 'getFormatXmlService',
            'format_yaml' => 'getFormatYamlService',
            'inspector_manager' => 'getInspectorManagerService',
            'inspector_object_symfony_component_httpfoundation_parameterbag' => 'getInspectorObjectSymfonyComponentHttpfoundationParameterbagService',
            'inspector_object_symfony_component_httpfoundation_request' => 'getInspectorObjectSymfonyComponentHttpfoundationRequestService',
            'inspector_object_symfony_component_httpfoundation_response' => 'getInspectorObjectSymfonyComponentHttpfoundationResponseService',
            'metadata_resolver' => 'getMetadataResolverService',
            'metadata_symfony' => 'getMetadataSymfonyService',
            'plugin.extra.inspector.php.object.domdocument' => 'getPlugin_Extra_Inspector_Php_Object_DomdocumentService',
            'plugin.extra.inspector.php.object.splmaxheap' => 'getPlugin_Extra_Inspector_Php_Object_SplmaxheapService',
            'plugin.extra.inspector.php.object.splminheap' => 'getPlugin_Extra_Inspector_Php_Object_SplminheapService',
            'plugin.extra.inspector.php.object.splqueue' => 'getPlugin_Extra_Inspector_Php_Object_SplqueueService',
            'plugin.extra.inspector.php.object.splstack' => 'getPlugin_Extra_Inspector_Php_Object_SplstackService',
            'plugin.extra.inspector.php.resource.file' => 'getPlugin_Extra_Inspector_Php_Resource_FileService',
            'plugin.extra.inspector.php.resource.gd' => 'getPlugin_Extra_Inspector_Php_Resource_GdService',
            'plugin.extra.inspector.php.resource.mysql_link' => 'getPlugin_Extra_Inspector_Php_Resource_MysqlLinkService',
            'plugin.extra.inspector.php.resource.mysql_result' => 'getPlugin_Extra_Inspector_Php_Resource_MysqlResultService',
            'plugin.extra.metadata.aura' => 'getPlugin_Extra_Metadata_AuraService',
            'plugin.extra.metadata.doctrine' => 'getPlugin_Extra_Metadata_DoctrineService',
            'plugin.extra.metadata.mysql' => 'getPlugin_Extra_Metadata_MysqlService',
            'plugin.extra.metadata.php' => 'getPlugin_Extra_Metadata_PhpService',
            'plugin.extra.metadata.silex' => 'getPlugin_Extra_Metadata_SilexService',
            'plugin.extra.metadata.twig' => 'getPlugin_Extra_Metadata_TwigService',
            'plugin.extra.metadata.zend' => 'getPlugin_Extra_Metadata_ZendService',
            'render_console' => 'getRenderConsoleService',
            'render_html' => 'getRenderHtmlService',
            'render_json' => 'getRenderJsonService',
            'render_php' => 'getRenderPhpService',
            'render_text' => 'getRenderTextService',
            'render_xml' => 'getRenderXmlService',
            'renderer_resolver' => 'getRendererResolverService',
            'theme_base' => 'getThemeBaseService',
            'theme_modern' => 'getThemeModernService',
            'theme_resolver' => 'getThemeResolverService',
            'theme_simple' => 'getThemeSimpleService',
            'type_array' => 'getTypeArrayService',
            'type_bool' => 'getTypeBoolService',
            'type_extended_code' => 'getTypeExtendedCodeService',
            'type_extended_collection' => 'getTypeExtendedCollectionService',
            'type_extended_container' => 'getTypeExtendedContainerService',
            'type_extended_factory' => 'getTypeExtendedFactoryService',
            'type_extended_image' => 'getTypeExtendedImageService',
            'type_extended_size' => 'getTypeExtendedSizeService',
            'type_extended_table' => 'getTypeExtendedTableService',
            'type_extended_text' => 'getTypeExtendedTextService',
            'type_extended_unixpermissions' => 'getTypeExtendedUnixpermissionsService',
            'type_factory' => 'getTypeFactoryService',
            'type_float' => 'getTypeFloatService',
            'type_int' => 'getTypeIntService',
            'type_null' => 'getTypeNullService',
            'type_object' => 'getTypeObjectService',
            'type_resource' => 'getTypeResourceService',
            'type_string' => 'getTypeStringService',
        );

        $this->aliases = array();
    }

    /**
     * Gets the 'environment_ajax' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Environment\AjaxEnvironment A Ladybug\Environment\AjaxEnvironment instance.
     */
    protected function getEnvironmentAjaxService()
    {
        return $this->services['environment_ajax'] = new \Ladybug\Environment\AjaxEnvironment();
    }

    /**
     * Gets the 'environment_browser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Environment\BrowserEnvironment A Ladybug\Environment\BrowserEnvironment instance.
     */
    protected function getEnvironmentBrowserService()
    {
        return $this->services['environment_browser'] = new \Ladybug\Environment\BrowserEnvironment();
    }

    /**
     * Gets the 'environment_cli' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Environment\CliEnvironment A Ladybug\Environment\CliEnvironment instance.
     */
    protected function getEnvironmentCliService()
    {
        return $this->services['environment_cli'] = new \Ladybug\Environment\CliEnvironment();
    }

    /**
     * Gets the 'environment_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Environment\EnvironmentResolver A Ladybug\Environment\EnvironmentResolver instance.
     */
    protected function getEnvironmentResolverService()
    {
        $this->services['environment_resolver'] = $instance = new \Ladybug\Environment\EnvironmentResolver();

        $instance->register($this->get('environment_browser'), 'environment_browser');
        $instance->register($this->get('environment_ajax'), 'environment_ajax');
        $instance->register($this->get('environment_cli'), 'environment_cli');

        return $instance;
    }

    /**
     * Gets the 'format_console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Format\ConsoleFormat A Ladybug\Format\ConsoleFormat instance.
     */
    protected function getFormatConsoleService()
    {
        return $this->services['format_console'] = new \Ladybug\Format\ConsoleFormat();
    }

    /**
     * Gets the 'format_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Format\HtmlFormat A Ladybug\Format\HtmlFormat instance.
     */
    protected function getFormatHtmlService()
    {
        return $this->services['format_html'] = new \Ladybug\Format\HtmlFormat();
    }

    /**
     * Gets the 'format_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Format\JsonFormat A Ladybug\Format\JsonFormat instance.
     */
    protected function getFormatJsonService()
    {
        return $this->services['format_json'] = new \Ladybug\Format\JsonFormat();
    }

    /**
     * Gets the 'format_php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Format\PhpFormat A Ladybug\Format\PhpFormat instance.
     */
    protected function getFormatPhpService()
    {
        return $this->services['format_php'] = new \Ladybug\Format\PhpFormat();
    }

    /**
     * Gets the 'format_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Format\FormatResolver A Ladybug\Format\FormatResolver instance.
     */
    protected function getFormatResolverService()
    {
        $this->services['format_resolver'] = $instance = new \Ladybug\Format\FormatResolver();

        $instance->register($this->get('format_console'), 'format_console');
        $instance->register($this->get('format_html'), 'format_html');
        $instance->register($this->get('format_json'), 'format_json');
        $instance->register($this->get('format_php'), 'format_php');
        $instance->register($this->get('format_text'), 'format_text');
        $instance->register($this->get('format_xml'), 'format_xml');
        $instance->register($this->get('format_yaml'), 'format_yaml');

        return $instance;
    }

    /**
     * Gets the 'format_text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Format\TextFormat A Ladybug\Format\TextFormat instance.
     */
    protected function getFormatTextService()
    {
        return $this->services['format_text'] = new \Ladybug\Format\TextFormat();
    }

    /**
     * Gets the 'format_xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Format\XmlFormat A Ladybug\Format\XmlFormat instance.
     */
    protected function getFormatXmlService()
    {
        return $this->services['format_xml'] = new \Ladybug\Format\XmlFormat();
    }

    /**
     * Gets the 'format_yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Format\YamlFormat A Ladybug\Format\YamlFormat instance.
     */
    protected function getFormatYamlService()
    {
        return $this->services['format_yaml'] = new \Ladybug\Format\YamlFormat();
    }

    /**
     * Gets the 'inspector_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Inspector\InspectorManager A Ladybug\Inspector\InspectorManager instance.
     */
    protected function getInspectorManagerService()
    {
        $this->services['inspector_manager'] = $instance = new \Ladybug\Inspector\InspectorManager();

        $instance->add($this->get('inspector_object_symfony_component_httpfoundation_parameterbag'), 'inspector_object_symfony_component_httpfoundation_parameterbag');
        $instance->add($this->get('inspector_object_symfony_component_httpfoundation_request'), 'inspector_object_symfony_component_httpfoundation_request');
        $instance->add($this->get('inspector_object_symfony_component_httpfoundation_response'), 'inspector_object_symfony_component_httpfoundation_response');
        $instance->add($this->get('plugin.extra.inspector.php.object.domdocument'), 'plugin.extra.inspector.php.object.domdocument');
        $instance->add($this->get('plugin.extra.inspector.php.object.splmaxheap'), 'plugin.extra.inspector.php.object.splmaxheap');
        $instance->add($this->get('plugin.extra.inspector.php.object.splminheap'), 'plugin.extra.inspector.php.object.splminheap');
        $instance->add($this->get('plugin.extra.inspector.php.object.splstack'), 'plugin.extra.inspector.php.object.splstack');
        $instance->add($this->get('plugin.extra.inspector.php.object.splqueue'), 'plugin.extra.inspector.php.object.splqueue');
        $instance->add($this->get('plugin.extra.inspector.php.resource.file'), 'plugin.extra.inspector.php.resource.file');
        $instance->add($this->get('plugin.extra.inspector.php.resource.gd'), 'plugin.extra.inspector.php.resource.gd');
        $instance->add($this->get('plugin.extra.inspector.php.resource.mysql_link'), 'plugin.extra.inspector.php.resource.mysql_link');
        $instance->add($this->get('plugin.extra.inspector.php.resource.mysql_result'), 'plugin.extra.inspector.php.resource.mysql_result');

        return $instance;
    }

    /**
     * Gets the 'inspector_object_symfony_component_httpfoundation_parameterbag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\ParameterBag A Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\ParameterBag instance.
     */
    protected function getInspectorObjectSymfonyComponentHttpfoundationParameterbagService()
    {
        return $this->services['inspector_object_symfony_component_httpfoundation_parameterbag'] = new \Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\ParameterBag($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'inspector_object_symfony_component_httpfoundation_request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\Request A Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\Request instance.
     */
    protected function getInspectorObjectSymfonyComponentHttpfoundationRequestService()
    {
        return $this->services['inspector_object_symfony_component_httpfoundation_request'] = new \Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\Request($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'inspector_object_symfony_component_httpfoundation_response' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\Response A Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\Response instance.
     */
    protected function getInspectorObjectSymfonyComponentHttpfoundationResponseService()
    {
        return $this->services['inspector_object_symfony_component_httpfoundation_response'] = new \Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation\Response($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'metadata_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Metadata\MetadataResolver A Ladybug\Metadata\MetadataResolver instance.
     */
    protected function getMetadataResolverService()
    {
        $this->services['metadata_resolver'] = $instance = new \Ladybug\Metadata\MetadataResolver();

        $instance->add($this->get('metadata_symfony'), 'metadata_symfony');
        $instance->add($this->get('plugin.extra.metadata.aura'), 'plugin.extra.metadata.aura');
        $instance->add($this->get('plugin.extra.metadata.doctrine'), 'plugin.extra.metadata.doctrine');
        $instance->add($this->get('plugin.extra.metadata.mysql'), 'plugin.extra.metadata.mysql');
        $instance->add($this->get('plugin.extra.metadata.php'), 'plugin.extra.metadata.php');
        $instance->add($this->get('plugin.extra.metadata.silex'), 'plugin.extra.metadata.silex');
        $instance->add($this->get('plugin.extra.metadata.twig'), 'plugin.extra.metadata.twig');
        $instance->add($this->get('plugin.extra.metadata.zend'), 'plugin.extra.metadata.zend');

        return $instance;
    }

    /**
     * Gets the 'metadata_symfony' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Symfony2\Metadata\Symfony2Metadata A Ladybug\Plugin\Symfony2\Metadata\Symfony2Metadata instance.
     */
    protected function getMetadataSymfonyService()
    {
        return $this->services['metadata_symfony'] = new \Ladybug\Plugin\Symfony2\Metadata\Symfony2Metadata();
    }

    /**
     * Gets the 'plugin.extra.inspector.php.object.domdocument' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Object\Php\DOMDocument A Ladybug\Plugin\Extra\Inspector\Object\Php\DOMDocument instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Object_DomdocumentService()
    {
        return $this->services['plugin.extra.inspector.php.object.domdocument'] = new \Ladybug\Plugin\Extra\Inspector\Object\Php\DOMDocument($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.inspector.php.object.splmaxheap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Object\Php\SplMaxHeap A Ladybug\Plugin\Extra\Inspector\Object\Php\SplMaxHeap instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Object_SplmaxheapService()
    {
        return $this->services['plugin.extra.inspector.php.object.splmaxheap'] = new \Ladybug\Plugin\Extra\Inspector\Object\Php\SplMaxHeap($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.inspector.php.object.splminheap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Object\Php\SplMinHeap A Ladybug\Plugin\Extra\Inspector\Object\Php\SplMinHeap instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Object_SplminheapService()
    {
        return $this->services['plugin.extra.inspector.php.object.splminheap'] = new \Ladybug\Plugin\Extra\Inspector\Object\Php\SplMinHeap($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.inspector.php.object.splqueue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Object\Php\SplQueue A Ladybug\Plugin\Extra\Inspector\Object\Php\SplQueue instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Object_SplqueueService()
    {
        return $this->services['plugin.extra.inspector.php.object.splqueue'] = new \Ladybug\Plugin\Extra\Inspector\Object\Php\SplQueue($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.inspector.php.object.splstack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Object\Php\SplStack A Ladybug\Plugin\Extra\Inspector\Object\Php\SplStack instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Object_SplstackService()
    {
        return $this->services['plugin.extra.inspector.php.object.splstack'] = new \Ladybug\Plugin\Extra\Inspector\Object\Php\SplStack($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.inspector.php.resource.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Resource\Php\File A Ladybug\Plugin\Extra\Inspector\Resource\Php\File instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Resource_FileService()
    {
        return $this->services['plugin.extra.inspector.php.resource.file'] = new \Ladybug\Plugin\Extra\Inspector\Resource\Php\File($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.inspector.php.resource.gd' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Resource\Php\Gd A Ladybug\Plugin\Extra\Inspector\Resource\Php\Gd instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Resource_GdService()
    {
        return $this->services['plugin.extra.inspector.php.resource.gd'] = new \Ladybug\Plugin\Extra\Inspector\Resource\Php\Gd($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.inspector.php.resource.mysql_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Resource\Php\MysqlLink A Ladybug\Plugin\Extra\Inspector\Resource\Php\MysqlLink instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Resource_MysqlLinkService()
    {
        return $this->services['plugin.extra.inspector.php.resource.mysql_link'] = new \Ladybug\Plugin\Extra\Inspector\Resource\Php\MysqlLink($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.inspector.php.resource.mysql_result' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Inspector\Resource\Php\MysqlResult A Ladybug\Plugin\Extra\Inspector\Resource\Php\MysqlResult instance.
     */
    protected function getPlugin_Extra_Inspector_Php_Resource_MysqlResultService()
    {
        return $this->services['plugin.extra.inspector.php.resource.mysql_result'] = new \Ladybug\Plugin\Extra\Inspector\Resource\Php\MysqlResult($this->get('type_factory'), $this->get('type_extended_factory'));
    }

    /**
     * Gets the 'plugin.extra.metadata.aura' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Metadata\AuraMetadata A Ladybug\Plugin\Extra\Metadata\AuraMetadata instance.
     */
    protected function getPlugin_Extra_Metadata_AuraService()
    {
        return $this->services['plugin.extra.metadata.aura'] = new \Ladybug\Plugin\Extra\Metadata\AuraMetadata();
    }

    /**
     * Gets the 'plugin.extra.metadata.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Metadata\DoctrineMetadata A Ladybug\Plugin\Extra\Metadata\DoctrineMetadata instance.
     */
    protected function getPlugin_Extra_Metadata_DoctrineService()
    {
        return $this->services['plugin.extra.metadata.doctrine'] = new \Ladybug\Plugin\Extra\Metadata\DoctrineMetadata();
    }

    /**
     * Gets the 'plugin.extra.metadata.mysql' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Metadata\MysqlMetadata A Ladybug\Plugin\Extra\Metadata\MysqlMetadata instance.
     */
    protected function getPlugin_Extra_Metadata_MysqlService()
    {
        return $this->services['plugin.extra.metadata.mysql'] = new \Ladybug\Plugin\Extra\Metadata\MysqlMetadata();
    }

    /**
     * Gets the 'plugin.extra.metadata.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Metadata\PhpMetadata A Ladybug\Plugin\Extra\Metadata\PhpMetadata instance.
     */
    protected function getPlugin_Extra_Metadata_PhpService()
    {
        return $this->services['plugin.extra.metadata.php'] = new \Ladybug\Plugin\Extra\Metadata\PhpMetadata();
    }

    /**
     * Gets the 'plugin.extra.metadata.silex' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Metadata\SilexMetadata A Ladybug\Plugin\Extra\Metadata\SilexMetadata instance.
     */
    protected function getPlugin_Extra_Metadata_SilexService()
    {
        return $this->services['plugin.extra.metadata.silex'] = new \Ladybug\Plugin\Extra\Metadata\SilexMetadata();
    }

    /**
     * Gets the 'plugin.extra.metadata.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Metadata\TwigMetadata A Ladybug\Plugin\Extra\Metadata\TwigMetadata instance.
     */
    protected function getPlugin_Extra_Metadata_TwigService()
    {
        return $this->services['plugin.extra.metadata.twig'] = new \Ladybug\Plugin\Extra\Metadata\TwigMetadata();
    }

    /**
     * Gets the 'plugin.extra.metadata.zend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Metadata\ZendMetadata A Ladybug\Plugin\Extra\Metadata\ZendMetadata instance.
     */
    protected function getPlugin_Extra_Metadata_ZendService()
    {
        return $this->services['plugin.extra.metadata.zend'] = new \Ladybug\Plugin\Extra\Metadata\ZendMetadata();
    }

    /**
     * Gets the 'render_console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Renderer\ConsoleRenderer A Ladybug\Renderer\ConsoleRenderer instance.
     */
    protected function getRenderConsoleService()
    {
        return $this->services['render_console'] = new \Ladybug\Renderer\ConsoleRenderer($this->get('theme_resolver'));
    }

    /**
     * Gets the 'render_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Renderer\HtmlRenderer A Ladybug\Renderer\HtmlRenderer instance.
     */
    protected function getRenderHtmlService()
    {
        return $this->services['render_html'] = new \Ladybug\Renderer\HtmlRenderer($this->get('theme_resolver'), array('width' => '500px'));
    }

    /**
     * Gets the 'render_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Renderer\JsonRenderer A Ladybug\Renderer\JsonRenderer instance.
     */
    protected function getRenderJsonService()
    {
        return $this->services['render_json'] = new \Ladybug\Renderer\JsonRenderer($this->get('theme_resolver'));
    }

    /**
     * Gets the 'render_php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Renderer\PhpRenderer A Ladybug\Renderer\PhpRenderer instance.
     */
    protected function getRenderPhpService()
    {
        return $this->services['render_php'] = new \Ladybug\Renderer\PhpRenderer($this->get('theme_resolver'));
    }

    /**
     * Gets the 'render_text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Renderer\TextRenderer A Ladybug\Renderer\TextRenderer instance.
     */
    protected function getRenderTextService()
    {
        return $this->services['render_text'] = new \Ladybug\Renderer\TextRenderer($this->get('theme_resolver'));
    }

    /**
     * Gets the 'render_xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Renderer\XmlRenderer A Ladybug\Renderer\XmlRenderer instance.
     */
    protected function getRenderXmlService()
    {
        return $this->services['render_xml'] = new \Ladybug\Renderer\XmlRenderer($this->get('theme_resolver'));
    }

    /**
     * Gets the 'renderer_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Renderer\RendererResolver A Ladybug\Renderer\RendererResolver instance.
     */
    protected function getRendererResolverService()
    {
        $this->services['renderer_resolver'] = $instance = new \Ladybug\Renderer\RendererResolver();

        $instance->add($this->get('render_html'), 'render_html');
        $instance->add($this->get('render_console'), 'render_console');
        $instance->add($this->get('render_php'), 'render_php');
        $instance->add($this->get('render_text'), 'render_text');
        $instance->add($this->get('render_json'), 'render_json');
        $instance->add($this->get('render_xml'), 'render_xml');

        return $instance;
    }

    /**
     * Gets the 'theme_base' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Theme\Base\BaseTheme A Ladybug\Theme\Base\BaseTheme instance.
     */
    protected function getThemeBaseService()
    {
        return $this->services['theme_base'] = new \Ladybug\Theme\Base\BaseTheme();
    }

    /**
     * Gets the 'theme_modern' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Theme\Modern\ModernTheme A Ladybug\Theme\Modern\ModernTheme instance.
     */
    protected function getThemeModernService()
    {
        return $this->services['theme_modern'] = new \Ladybug\Theme\Modern\ModernTheme('/var/www/newscoop/vendor/raulfraile/ladybug-themes/Ladybug/Theme/Modern');
    }

    /**
     * Gets the 'theme_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Theme\ThemeResolver A Ladybug\Theme\ThemeResolver instance.
     */
    protected function getThemeResolverService()
    {
        $this->services['theme_resolver'] = $instance = new \Ladybug\Theme\ThemeResolver();

        $instance->addTheme($this->get('theme_base'), 'theme_base');
        $instance->addTheme($this->get('theme_simple'), 'theme_simple', true);
        $instance->addTheme($this->get('theme_modern'), 'theme_modern');

        return $instance;
    }

    /**
     * Gets the 'theme_simple' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Theme\Simple\SimpleTheme A Ladybug\Theme\Simple\SimpleTheme instance.
     */
    protected function getThemeSimpleService()
    {
        return $this->services['theme_simple'] = new \Ladybug\Theme\Simple\SimpleTheme();
    }

    /**
     * Gets the 'type_array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\Vector\Container A Ladybug\Type\Vector\Container instance.
     */
    protected function getTypeArrayService()
    {
        return $this->services['type_array'] = new \Ladybug\Type\Vector\Container(9, $this->get('type_factory'));
    }

    /**
     * Gets the 'type_bool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\BoolType A Ladybug\Type\BoolType instance.
     */
    protected function getTypeBoolService()
    {
        return $this->services['type_bool'] = new \Ladybug\Type\BoolType();
    }

    /**
     * Gets the 'type_extended_code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Type\CodeType A Ladybug\Plugin\Extra\Type\CodeType instance.
     */
    protected function getTypeExtendedCodeService()
    {
        return $this->services['type_extended_code'] = new \Ladybug\Plugin\Extra\Type\CodeType();
    }

    /**
     * Gets the 'type_extended_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Type\CollectionType A Ladybug\Plugin\Extra\Type\CollectionType instance.
     */
    protected function getTypeExtendedCollectionService()
    {
        return $this->services['type_extended_collection'] = new \Ladybug\Plugin\Extra\Type\CollectionType();
    }

    /**
     * Gets the 'type_extended_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Type\ContainerType A Ladybug\Plugin\Extra\Type\ContainerType instance.
     */
    protected function getTypeExtendedContainerService()
    {
        return $this->services['type_extended_container'] = new \Ladybug\Plugin\Extra\Type\ContainerType();
    }

    /**
     * Gets the 'type_extended_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\ExtendedTypeFactory A Ladybug\Type\ExtendedTypeFactory instance.
     */
    protected function getTypeExtendedFactoryService()
    {
        $this->services['type_extended_factory'] = $instance = new \Ladybug\Type\ExtendedTypeFactory();

        $instance->add($this->get('type_extended_code'), 'type_extended_code');
        $instance->add($this->get('type_extended_table'), 'type_extended_table');
        $instance->add($this->get('type_extended_collection'), 'type_extended_collection');
        $instance->add($this->get('type_extended_text'), 'type_extended_text');
        $instance->add($this->get('type_extended_image'), 'type_extended_image');
        $instance->add($this->get('type_extended_size'), 'type_extended_size');
        $instance->add($this->get('type_extended_unixpermissions'), 'type_extended_unixpermissions');
        $instance->add($this->get('type_extended_container'), 'type_extended_container');

        return $instance;
    }

    /**
     * Gets the 'type_extended_image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Type\ImageType A Ladybug\Plugin\Extra\Type\ImageType instance.
     */
    protected function getTypeExtendedImageService()
    {
        return $this->services['type_extended_image'] = new \Ladybug\Plugin\Extra\Type\ImageType();
    }

    /**
     * Gets the 'type_extended_size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Type\SizeType A Ladybug\Plugin\Extra\Type\SizeType instance.
     */
    protected function getTypeExtendedSizeService()
    {
        return $this->services['type_extended_size'] = new \Ladybug\Plugin\Extra\Type\SizeType();
    }

    /**
     * Gets the 'type_extended_table' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Type\TableType A Ladybug\Plugin\Extra\Type\TableType instance.
     */
    protected function getTypeExtendedTableService()
    {
        return $this->services['type_extended_table'] = new \Ladybug\Plugin\Extra\Type\TableType();
    }

    /**
     * Gets the 'type_extended_text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Type\TextType A Ladybug\Plugin\Extra\Type\TextType instance.
     */
    protected function getTypeExtendedTextService()
    {
        return $this->services['type_extended_text'] = new \Ladybug\Plugin\Extra\Type\TextType();
    }

    /**
     * Gets the 'type_extended_unixpermissions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Plugin\Extra\Type\UnixPermissionsType A Ladybug\Plugin\Extra\Type\UnixPermissionsType instance.
     */
    protected function getTypeExtendedUnixpermissionsService()
    {
        return $this->services['type_extended_unixpermissions'] = new \Ladybug\Plugin\Extra\Type\UnixPermissionsType();
    }

    /**
     * Gets the 'type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\FactoryType A Ladybug\Type\FactoryType instance.
     */
    protected function getTypeFactoryService()
    {
        $this->services['type_factory'] = $instance = new \Ladybug\Type\FactoryType();

        $instance->add($this->get('type_null'), 'type_null');
        $instance->add($this->get('type_bool'), 'type_bool');
        $instance->add($this->get('type_int'), 'type_int');
        $instance->add($this->get('type_float'), 'type_float');
        $instance->add($this->get('type_string'), 'type_string');
        $instance->add($this->get('type_array'), 'type_array');
        $instance->add($this->get('type_object'), 'type_object');
        $instance->add($this->get('type_resource'), 'type_resource');

        return $instance;
    }

    /**
     * Gets the 'type_float' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\FloatType A Ladybug\Type\FloatType instance.
     */
    protected function getTypeFloatService()
    {
        return $this->services['type_float'] = new \Ladybug\Type\FloatType();
    }

    /**
     * Gets the 'type_int' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\IntType A Ladybug\Type\IntType instance.
     */
    protected function getTypeIntService()
    {
        return $this->services['type_int'] = new \Ladybug\Type\IntType();
    }

    /**
     * Gets the 'type_null' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\NullType A Ladybug\Type\NullType instance.
     */
    protected function getTypeNullService()
    {
        return $this->services['type_null'] = new \Ladybug\Type\NullType();
    }

    /**
     * Gets the 'type_object' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\Object\Container A Ladybug\Type\Object\Container instance.
     */
    protected function getTypeObjectService()
    {
        return $this->services['type_object'] = new \Ladybug\Type\Object\Container(3, $this->get('type_factory'), $this->get('inspector_manager'), $this->get('metadata_resolver'));
    }

    /**
     * Gets the 'type_resource' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\ResourceType A Ladybug\Type\ResourceType instance.
     */
    protected function getTypeResourceService()
    {
        return $this->services['type_resource'] = new \Ladybug\Type\ResourceType($this->get('type_factory'), $this->get('inspector_manager'), $this->get('metadata_resolver'));
    }

    /**
     * Gets the 'type_string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ladybug\Type\StringType A Ladybug\Type\StringType instance.
     */
    protected function getTypeStringService()
    {
        return $this->services['type_string'] = new \Ladybug\Type\StringType();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'root_dir' => '/var/www/newscoop/vendor/raulfraile/ladybug/src/Ladybug',
            'helpers' => array(
                0 => 'Ladybug\\Dumper:dump',
                1 => 'ladybug_set_theme',
                2 => 'ladybug_set_format',
                3 => 'ladybug_set_option',
                4 => 'ladybug_set_options',
                5 => 'ladybug_dump',
                6 => 'ladybug_dump_die',
                7 => 'ladybug_dump_class',
                8 => 'ladybug_dump_class_die',
                9 => 'ld',
                10 => 'ldd',
                11 => 'ldc',
                12 => 'ldcd',
            ),
            'theme' => 'modern',
            'array_max_nesting_level' => 9,
            'object_max_nesting_level' => 3,
            'expanded' => false,
            'silenced' => false,
            'renderer.html' => array(
                'width' => '500px',
            ),
            'extra_helpers' => array(
                0 => 'RaulFraile\\Bundle\\LadybugBundle\\DataCollector\\LadybugDataCollector:log',
            ),
        );
    }
}
