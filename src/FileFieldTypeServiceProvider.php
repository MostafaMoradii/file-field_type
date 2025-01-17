<?php namespace Visiosoft\FileFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class FileFieldTypeServiceProvider
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class FileFieldTypeServiceProvider extends AddonServiceProvider
{

    /**
     * The singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        FileFieldTypeModifier::class => FileFieldTypeModifier::class,
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'streams/file-field_type/index/{key}'           => 'Visiosoft\FileFieldType\Http\Controller\FilesController@index',
        'streams/file-field_type/choose/{key}'          => 'Visiosoft\FileFieldType\Http\Controller\FilesController@choose',
        'streams/file-field_type/selected'              => 'Visiosoft\FileFieldType\Http\Controller\FilesController@selected',
        'streams/file-field_type/exists/{folder}'       => 'Visiosoft\FileFieldType\Http\Controller\FilesController@exists',
        'streams/file-field_type/upload/{folder}/{key}' => 'Visiosoft\FileFieldType\Http\Controller\UploadController@index',
        'streams/file-field_type/handle'                => 'Visiosoft\FileFieldType\Http\Controller\UploadController@upload',
        'streams/file-field_type/recent'                => 'Visiosoft\FileFieldType\Http\Controller\UploadController@recent',
    ];

}
