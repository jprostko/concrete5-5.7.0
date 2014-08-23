<?php
use Concrete\Core\Asset\Asset;
use Concrete\Core\File\Type\Type as FileType;

return array(

    'debug'               => false,
    'version'             => '5.7.0b2',

    /**
     * Core Aliases
     */
    'aliases'             => array(
        'Request'                              => '\Concrete\Core\Http\Request',
        'Environment'                          => '\Concrete\Core\Foundation\Environment',
        'Localization'                         => '\Concrete\Core\Localization\Localization',
        'Response'                             => '\Concrete\Core\Http\Response',
        'Redirect'                             => '\Concrete\Core\Routing\Redirect',
        'URL'                                  => '\Concrete\Core\Routing\URL',
        'Cookie'                               => '\Concrete\Core\Cookie\Cookie',
        'Cache'                                => '\Concrete\Core\Cache\Cache',
        'CacheLocal'                           => '\Concrete\Core\Cache\CacheLocal',
        'CollectionAttributeKey'               => '\Concrete\Core\Attribute\Key\CollectionKey',
        'FileAttributeKey'                     => '\Concrete\Core\Attribute\Key\FileKey',
        'UserAttributeKey'                     => '\Concrete\Core\Attribute\Key\UserKey',
        'AttributeSet'                         => '\Concrete\Core\Attribute\Set',
        'AssetList'                            => '\Concrete\Core\Asset\AssetList',
        'Router'                               => '\Concrete\Core\Routing\Router',
        'RedirectResponse'                     => '\Concrete\Core\Routing\RedirectResponse',
        'Page'                                 => '\Concrete\Core\Page\Page',
        'PageEditResponse'                     => '\Concrete\Core\Page\EditResponse',
        'Controller'                           => '\Concrete\Core\Controller\Controller',
        'PageController'                       => '\Concrete\Core\Page\Controller\PageController',
        'SinglePage'                           => '\Concrete\Core\Page\Single',
        'Config'                               => '\Concrete\Core\Config\Config',
        'PageType'                             => '\Concrete\Core\Page\Type\Type',
        'PageTemplate'                         => '\Concrete\Core\Page\Template',
        'PageTheme'                            => '\Concrete\Core\Page\Theme\Theme',
        'PageList'                             => '\Concrete\Core\Page\PageList',
        'PageCache'                            => '\Concrete\Core\Cache\Page\PageCache',
        'Conversation'                         => '\Concrete\Core\Conversation\Conversation',
        'ConversationEditor'                   => '\Concrete\Core\Conversation\Editor\Editor',
        'ConversationMessage'                  => '\Concrete\Core\Conversation\Message\Message',
        'ConversationFlagType'                 => '\Concrete\Core\Conversation\FlagType\FlagType',
        'ConversationRatingType'               => '\Concrete\Core\Conversation\Rating\Type',
        'Queue'                                => '\Concrete\Core\Foundation\Queue\Queue',
        'Block'                                => '\Concrete\Core\Block\Block',
        'Marketplace'                          => '\Concrete\Core\Marketplace\Marketplace',
        'BlockType'                            => '\Concrete\Core\Block\BlockType\BlockType',
        'BlockTypeList'                        => '\Concrete\Core\Block\BlockType\BlockTypeList',
        'BlockTypeSet'                         => '\Concrete\Core\Block\BlockType\Set',
        'Package'                              => '\Concrete\Core\Package\Package',
        'Collection'                           => '\Concrete\Core\Page\Collection\Collection',
        'CollectionVersion'                    => '\Concrete\Core\Page\Collection\Version\Version',
        'Area'                                 => '\Concrete\Core\Area\Area',
        'GlobalArea'                           => '\Concrete\Core\Area\GlobalArea',
        'Stack'                                => '\Concrete\Core\Page\Stack\Stack',
        'StackList'                            => '\Concrete\Core\Page\Stack\StackList',
        'View'                                 => '\Concrete\Core\View\View',
        'Job'                                  => '\Concrete\Core\Job\Job',
        'Workflow'                             => '\Concrete\Core\Workflow\Workflow',
        'JobSet'                               => '\Concrete\Core\Job\Set',
        'File'                                 => '\Concrete\Core\File\File',
        'FileVersion'                          => '\Concrete\Core\File\Version',
        'FileSet'                              => '\Concrete\Core\File\Set\Set',
        'FileImporter'                         => '\Concrete\Core\File\Importer',
        'Group'                                => '\Concrete\Core\User\Group\Group',
        'GroupSet'                             => '\Concrete\Core\User\Group\GroupSet',
        'GroupSetList'                         => '\Concrete\Core\User\Group\GroupSetList',
        'GroupList'                            => '\Concrete\Core\User\Group\GroupList',
        'FileList'                             => '\Concrete\Core\File\FileList',
        'QueueableJob'                         => '\Concrete\Core\Job\QueueableJob',
        'Permissions'                          => '\Concrete\Core\Permission\Checker',
        'PermissionKey'                        => '\Concrete\Core\Permission\Key\Key',
        'PermissionKeyCategory'                => '\Concrete\Core\Permission\Category',
        'PermissionAccess'                     => '\Concrete\Core\Permission\Access\Access',
        'User'                                 => '\Concrete\Core\User\User',
        'UserInfo'                             => '\Concrete\Core\User\UserInfo',
        'UserList'                             => '\Concrete\Core\User\UserList',
        'StartingPointPackage'                 => '\Concrete\Core\Package\StartingPointPackage',
        'AuthenticationType'                   => '\Concrete\Core\Authentication\AuthenticationType',
        'ConcreteAuthenticationTypeController' => '\Concrete\Authentication\Concrete\Controller',
        'FacebookAuthenticationTypeController' => '\Concrete\Authentication\Facebook\Controller',
        'GroupTree'                            => '\Concrete\Core\Tree\Type\Group',
        'GroupTreeNode'                        => '\Concrete\Core\Tree\Node\Type\Group',
        'Loader'                               => '\Concrete\Core\Legacy\Loader',
        'TaskPermission'                       => '\Concrete\Core\Legacy\TaskPermission',
        'FilePermissions'                      => '\Concrete\Core\Legacy\FilePermissions'
    ),

    /**
     * Core Providers
     */
    'providers'           => array(
        '\Concrete\Core\File\FileServiceProvider',
        '\Concrete\Core\Encryption\EncryptionServiceProvider',
        '\Concrete\Core\Validation\ValidationServiceProvider',
        '\Concrete\Core\Localization\LocalizationServiceProvider',
        '\Concrete\Core\Feed\FeedServiceProvider',
        '\Concrete\Core\Html\HtmlServiceProvider',
        '\Concrete\Core\Search\PaginationServiceProvider',
        '\Concrete\Core\Mail\MailServiceProvider',
        '\Concrete\Core\Application\ApplicationServiceProvider',
        '\Concrete\Core\Utility\UtilityServiceProvider',
        '\Concrete\Core\Database\DatabaseServiceProvider',
        '\Concrete\Core\Form\FormServiceProvider',
        '\Concrete\Core\Session\SessionServiceProvider',
        '\Concrete\Core\Http\HttpServiceProvider',
        '\Concrete\Core\Events\EventsServiceProvider',
        '\Concrete\Core\Error\Provider\WhoopsServiceProvider',
        '\Concrete\Core\Logging\LoggingServiceProvider'
    ),

    /**
     * Core Facades
     */
    'facades'             => array(
        'Core'     => '\Concrete\Core\Support\Facade\Application',
        'Session'  => '\Concrete\Core\Support\Facade\Session',
        'Database' => '\Concrete\Core\Support\Facade\Database',
        'Events'   => '\Concrete\Core\Support\Facade\Events',
        'Route'    => '\Concrete\Core\Support\Facade\Route',
        'Log'      => '\Concrete\Core\Support\Facade\Log',
        'Image'    => '\Concrete\Core\Support\Facade\Image',
    ),

    /**
     * Core Routes
     */
    'routes'              => array(

        /**
         * Install
         */
        '/install'                                                                      => array('\Concrete\Controller\Install::view'),
        '/install/select_language'                                                      => array('\Concrete\Controller\Install::select_language'),
        '/install/setup'                                                                => array('\Concrete\Controller\Install::setup'),
        '/install/test_url/{num1}/{num2}'                                               => array('\Concrete\Controller\Install::test_url'),
        '/install/configure'                                                            => array('\Concrete\Controller\Install::configure'),
        '/install/run_routine/{pkgHandle}/{routine}'                                    => array('\Concrete\Controller\Install::run_routine'),

        /**
         * Tools - legacy
         */
        '/tools/blocks/{btHandle}/{tool}'                                               => array(
            '\Concrete\Core\Legacy\Controller\ToolController::displayBlock',
            'blockTool',
            array('tool' => '[A-Za-z0-9_/.]+')),
        '/tools/{tool}'                                                                 => array(
            '\Concrete\Core\Legacy\Controller\ToolController::display',
            'tool',
            array('tool' => '[A-Za-z0-9_/.]+')),

        /**
         * Dialog
         */
        '/ccm/system/dialogs/page/delete'                                               => array('\Concrete\Controller\Dialog\Page\Delete::view'),
        '/ccm/system/dialogs/page/delete_from_sitemap'                                  => array('\Concrete\Controller\Dialog\Page\Delete::viewFromSitemap'),
        '/ccm/system/dialogs/page/delete/submit'                                        => array('\Concrete\Controller\Dialog\Page\Delete::submit'),
        '/ccm/system/dialogs/area/layout/presets/submit/{arLayoutID}'                   => array('\Concrete\Controller\Dialog\Area\Layout\Presets::submit'),
        '/ccm/system/dialogs/area/layout/presets/{arLayoutID}/{token}'                  => array('\Concrete\Controller\Dialog\Area\Layout\Presets::view'),
        '/ccm/system/dialogs/page/bulk/properties'                                      => array('\Concrete\Controller\Dialog\Page\Bulk\Properties::view'),
        '/ccm/system/dialogs/page/bulk/properties/update_attribute'                     => array('\Concrete\Controller\Dialog\Page\Bulk\Properties::updateAttribute'),
        '/ccm/system/dialogs/page/bulk/properties/clear_attribute'                      => array('\Concrete\Controller\Dialog\Page\Bulk\Properties::clearAttribute'),
        '/ccm/system/dialogs/page/design'                                               => array('\Concrete\Controller\Dialog\Page\Design::view'),
        '/ccm/system/dialogs/page/design/submit'                                        => array('\Concrete\Controller\Dialog\Page\Design::submit'),
        '/ccm/system/dialogs/user/search'                                               => array('\Concrete\Controller\Dialog\User\Search::view'),
        '/ccm/system/dialogs/group/search'                                              => array('\Concrete\Controller\Dialog\Group\Search::view'),
        '/ccm/system/dialogs/file/search'                                               => array('\Concrete\Controller\Dialog\File\Search::view'),
        '/ccm/system/dialogs/page/design/css'                                           => array('\Concrete\Controller\Dialog\Page\Design\Css::view'),
        '/ccm/system/dialogs/page/design/css/submit'                                    => array('\Concrete\Controller\Dialog\Page\Design\Css::submit'),
        '/ccm/system/dialogs/page/search'                                               => array('\Concrete\Controller\Dialog\Page\Search::view'),
        '/ccm/system/dialogs/page/attributes'                                           => array('\Concrete\Controller\Dialog\Page\Attributes::view'),
        '/ccm/system/dialogs/user/bulk/properties'                                      => array('\Concrete\Controller\Dialog\User\Bulk\Properties::view'),
        '/ccm/system/dialogs/user/bulk/properties/update_attribute'                     => array('\Concrete\Controller\Dialog\User\Bulk\Properties::updateAttribute'),
        '/ccm/system/dialogs/user/bulk/properties/clear_attribute'                      => array('\Concrete\Controller\Dialog\User\Bulk\Properties::clearAttribute'),
        '/ccm/system/dialogs/file/properties'                                           => array('\Concrete\Controller\Dialog\File\Properties::view'),
        '/ccm/system/dialogs/file/thumbnails'                                           => array('\Concrete\Controller\Dialog\File\Thumbnails::view'),
        '/ccm/system/dialogs/file/thumbnails/edit'                                      => array('\Concrete\Controller\Dialog\File\Thumbnails\Edit::view'),
        '/ccm/system/dialogs/file/properties/save'                                      => array('\Concrete\Controller\Dialog\File\Properties::save'),
        '/ccm/system/dialogs/file/properties/update_attribute'                          => array('\Concrete\Controller\Dialog\File\Properties::update_attribute'),
        '/ccm/system/dialogs/file/properties/clear_attribute'                           => array('\Concrete\Controller\Dialog\File\Properties::clear_attribute'),
        '/ccm/system/dialogs/file/bulk/properties'                                      => array('\Concrete\Controller\Dialog\File\Bulk\Properties::view'),
        '/ccm/system/dialogs/file/bulk/properties/update_attribute'                     => array('\Concrete\Controller\Dialog\File\Bulk\Properties::updateAttribute'),
        '/ccm/system/dialogs/file/bulk/properties/clear_attribute'                      => array('\Concrete\Controller\Dialog\File\Bulk\Properties::clearAttribute'),
        '/ccm/system/dialogs/page/add_block_list'                                       => array('\Concrete\Controller\Dialog\Page\AddBlockList::view'),
        '/ccm/system/dialogs/page/clipboard'                                            => array('\Concrete\Controller\Dialog\Page\Clipboard::view'),
        '/ccm/system/dialogs/page/add_block'                                            => array('\Concrete\Controller\Dialog\Page\AddBlock::view'),
        '/ccm/system/dialogs/page/add_block/submit'                                     => array('\Concrete\Controller\Dialog\Page\AddBlock::submit'),
        '/ccm/system/dialogs/page/search/customize'                                     => array('\Concrete\Controller\Dialog\Page\Search\Customize::view'),
        '/ccm/system/dialogs/page/search/customize/submit'                              => array('\Concrete\Controller\Dialog\Page\Search\Customize::submit'),
        '/ccm/system/dialogs/file/search/customize'                                     => array('\Concrete\Controller\Dialog\File\Search\Customize::view'),
        '/ccm/system/dialogs/file/search/customize/submit'                              => array('\Concrete\Controller\Dialog\File\Search\Customize::submit'),
        '/ccm/system/dialogs/user/search/customize'                                     => array('\Concrete\Controller\Dialog\User\Search\Customize::view'),
        '/ccm/system/dialogs/user/search/customize/submit'                              => array('\Concrete\Controller\Dialog\User\Search\Customize::submit'),
        '/ccm/system/dialogs/block/edit/'                                               => array('\Concrete\Controller\Dialog\Block\Edit::view'),
        '/ccm/system/dialogs/block/edit/submit/'                                        => array('\Concrete\Controller\Dialog\Block\Edit::submit'),
        '/ccm/system/dialogs/block/permissions/list/'                                   => array('\Concrete\Controller\Dialog\Block\Permissions::viewList'),
        '/ccm/system/dialogs/block/permissions/detail/'                                 => array('\Concrete\Controller\Dialog\Block\Permissions::viewDetail'),
        '/ccm/system/dialogs/block/permissions/guest_access/'                           => array('\Concrete\Controller\Dialog\Block\Permissions\GuestAccess::__construct'),
        '/ccm/system/dialogs/block/aliasing/'                                           => array('\Concrete\Controller\Dialog\Block\Aliasing::view'),
        '/ccm/system/dialogs/block/aliasing/submit'                                     => array('\Concrete\Controller\Dialog\Block\Aliasing::submit'),
        '/ccm/system/dialogs/block/design/'                                             => array('\Concrete\Controller\Dialog\Block\Design::view'),
        '/ccm/system/dialogs/block/design/submit'                                       => array('\Concrete\Controller\Dialog\Block\Design::submit'),
        '/ccm/system/dialogs/block/design/reset'                                        => array('\Concrete\Controller\Dialog\Block\Design::reset'),
        '/ccm/system/dialogs/area/design/'                                              => array('\Concrete\Controller\Dialog\Area\Design::view'),
        '/ccm/system/dialogs/area/design/submit'                                        => array('\Concrete\Controller\Dialog\Area\Design::submit'),
        '/ccm/system/dialogs/area/design/reset'                                         => array('\Concrete\Controller\Dialog\Area\Design::reset'),

        /**
         * Files
         */
        '/ccm/system/file/star'                                                         => array('\Concrete\Controller\Backend\File::star'),
        '/ccm/system/file/rescan'                                                       => array('\Concrete\Controller\Backend\File::rescan'),
        '/ccm/system/file/approve_version'                                              => array('\Concrete\Controller\Backend\File::approveVersion'),
        '/ccm/system/file/delete_version'                                               => array('\Concrete\Controller\Backend\File::deleteVersion'),
        '/ccm/system/file/get_json'                                                     => array('\Concrete\Controller\Backend\File::getJSON'),
        '/ccm/system/file/duplicate'                                                    => array('\Concrete\Controller\Backend\File::duplicate'),
        '/ccm/system/file/upload'                                                       => array('\Concrete\Controller\Backend\File::upload'),

        /**
         * Users
         */
        '/ccm/system/user/add_group'                                                    => array('\Concrete\Controller\Backend\User::addGroup'),
        '/ccm/system/user/remove_group'                                                 => array('\Concrete\Controller\Backend\User::removeGroup'),

        /**
         * Page actions - non UI
         */
        '/ccm/system/page/check_in/{cID}/{token}'                                       => array('\Concrete\Controller\Panel\Page\CheckIn::exitEditMode'),
        '/ccm/system/page/create/{ptID}'                                                => array('\Concrete\Controller\Backend\Page::create'),
        '/ccm/system/page/arrange_blocks/'                                              => array('\Concrete\Controller\Backend\Page\ArrangeBlocks::arrange'),

        /**
         * Block actions - non UI
         */
        '/ccm/system/block/render/'                                                     => array('\Concrete\Controller\Backend\Block::render'),

        /**
         * Misc
         */
        '/ccm/system/css/page/{cID}/{cvID}/{stylesheet}'                                => array('\Concrete\Controller\Frontend\Stylesheet::page'),
        '/ccm/system/css/layout/{bID}'                                                  => array('\Concrete\Controller\Frontend\Stylesheet::layout'),
        '/ccm/system/backend/editor_data/'                                              => array('\Concrete\Controller\Backend\EditorData::view'),

        /**
         * General Attribute
         */
        '/ccm/system/attribute/attribute_sort/set'                                      => array('\Concrete\Controller\Backend\AttributeSort::set'),
        '/ccm/system/attribute/attribute_sort/user'                                     => array('\Concrete\Controller\Backend\AttributeSort::user'),

        /**
         * Search Routes
         */
        '/ccm/system/search/pages/submit'                                               => array('\Concrete\Controller\Search\Pages::submit'),
        '/ccm/system/search/pages/field/{field}'                                        => array('\Concrete\Controller\Search\Pages::field'),
        '/ccm/system/search/files/submit'                                               => array('\Concrete\Controller\Search\Files::submit'),
        '/ccm/system/search/files/field/{field}'                                        => array('\Concrete\Controller\Search\Files::field'),
        '/ccm/system/search/users/submit'                                               => array('\Concrete\Controller\Search\Users::submit'),
        '/ccm/system/search/users/field/{field}'                                        => array('\Concrete\Controller\Search\Users::field'),
        '/ccm/system/search/groups/submit'                                              => array('\Concrete\Controller\Search\Groups::submit'),

        /**
         * Panels - top level
         */
        '/ccm/system/panels/dashboard'                                                  => array('\Concrete\Controller\Panel\Dashboard::view'),
        '/ccm/system/panels/sitemap'                                                    => array('\Concrete\Controller\Panel\Sitemap::view'),
        '/ccm/system/panels/add'                                                        => array('\Concrete\Controller\Panel\Add::view'),
        '/ccm/system/panels/page'                                                       => array('\Concrete\Controller\Panel\Page::view'),
        '/ccm/system/panels/page/attributes'                                            => array('\Concrete\Controller\Panel\Page\Attributes::view'),
        '/ccm/system/panels/page/design'                                                => array('\Concrete\Controller\Panel\Page\Design::view'),
        '/ccm/system/panels/page/design/preview_contents'                               => array('\Concrete\Controller\Panel\Page\Design::preview_contents'),
        '/ccm/system/panels/page/design/submit'                                         => array('\Concrete\Controller\Panel\Page\Design::submit'),
        '/ccm/system/panels/page/design/customize/preview/{pThemeID}'                   => array('\Concrete\Controller\Panel\Page\Design\Customize::preview'),
        '/ccm/system/panels/page/design/customize/apply_to_page/{pThemeID}'             => array('\Concrete\Controller\Panel\Page\Design\Customize::apply_to_page'),
        '/ccm/system/panels/page/design/customize/apply_to_site/{pThemeID}'             => array('\Concrete\Controller\Panel\Page\Design\Customize::apply_to_site'),
        '/ccm/system/panels/page/design/customize/reset_page_customizations'            => array('\Concrete\Controller\Panel\Page\Design\Customize::reset_page_customizations'),
        '/ccm/system/panels/page/design/customize/reset_site_customizations/{pThemeID}' => array('\Concrete\Controller\Panel\Page\Design\Customize::reset_site_customizations'),
        '/ccm/system/panels/page/design/customize/{pThemeID}'                           => array('\Concrete\Controller\Panel\Page\Design\Customize::view'),
        '/ccm/system/panels/page/check_in'                                              => array('\Concrete\Controller\Panel\Page\CheckIn::__construct'),
        '/ccm/system/panels/page/check_in/submit'                                       => array('\Concrete\Controller\Panel\Page\CheckIn::submit'),
        '/ccm/system/panels/page/versions'                                              => array('\Concrete\Controller\Panel\Page\Versions::view'),
        '/ccm/system/panels/page/versions/get_json'                                     => array('\Concrete\Controller\Panel\Page\Versions::get_json'),
        '/ccm/system/panels/page/versions/duplicate'                                    => array('\Concrete\Controller\Panel\Page\Versions::duplicate'),
        '/ccm/system/panels/page/versions/new_page'                                     => array('\Concrete\Controller\Panel\Page\Versions::new_page'),
        '/ccm/system/panels/page/versions/delete'                                       => array('\Concrete\Controller\Panel\Page\Versions::delete'),
        '/ccm/system/panels/page/versions/approve'                                      => array('\Concrete\Controller\Panel\Page\Versions::approve'),
        '/ccm/system/panels/page/preview_as_user'                                       => array('\Concrete\Controller\Panel\Page\PreviewAsUser::view'),
        '/ccm/system/panels/page/preview_as_user/preview'                               => array('\Concrete\Controller\Panel\Page\PreviewAsUser::frame_page'),
        '/ccm/system/panels/page/preview_as_user/render'                                => array('\Concrete\Controller\Panel\Page\PreviewAsUser::preview_page'),

        /**
         * Panel Details
         */
        '/ccm/system/panels/details/page/versions'                                      => array('\Concrete\Controller\Panel\Detail\Page\Versions::view'),
        '/ccm/system/panels/details/page/seo'                                           => array('\Concrete\Controller\Panel\Detail\Page\Seo::view'),
        '/ccm/system/panels/details/page/seo/submit'                                    => array('\Concrete\Controller\Panel\Detail\Page\Seo::submit'),
        '/ccm/system/panels/details/page/location'                                      => array('\Concrete\Controller\Panel\Detail\Page\Location::view'),
        '/ccm/system/panels/details/page/location/submit'                               => array('\Concrete\Controller\Panel\Detail\Page\Location::submit'),
        '/ccm/system/panels/details/page/preview'                                       => array('\Concrete\Controller\Panel\Page\Design::preview'),
        '/ccm/system/panels/details/page/composer'                                      => array('\Concrete\Controller\Panel\Detail\Page\Composer::view'),
        '/ccm/system/panels/details/page/composer/autosave'                             => array('\Concrete\Controller\Panel\Detail\Page\Composer::autosave'),
        '/ccm/system/panels/details/page/composer/publish'                              => array('\Concrete\Controller\Panel\Detail\Page\Composer::publish'),
        '/ccm/system/panels/details/page/composer/discard'                              => array('\Concrete\Controller\Panel\Detail\Page\Composer::discard'),
        '/ccm/system/panels/details/page/composer/save_and_exit'                        => array('\Concrete\Controller\Panel\Detail\Page\Composer::saveAndExit'),
        '/ccm/system/panels/details/page/attributes'                                    => array('\Concrete\Controller\Panel\Detail\Page\Attributes::view'),
        '/ccm/system/panels/details/page/attributes/submit'                             => array('\Concrete\Controller\Panel\Detail\Page\Attributes::submit'),
        '/ccm/system/panels/details/page/attributes/add_attribute'                      => array('\Concrete\Controller\Panel\Detail\Page\Attributes::add_attribute'),
        '/ccm/system/panels/details/page/caching'                                       => array('\Concrete\Controller\Panel\Detail\Page\Caching::view'),
        '/ccm/system/panels/details/page/caching/submit'                                => array('\Concrete\Controller\Panel\Detail\Page\Caching::submit'),
        '/ccm/system/panels/details/page/caching/purge'                                 => array('\Concrete\Controller\Panel\Detail\Page\Caching::purge'),
        '/ccm/system/panels/details/page/permissions'                                   => array('\Concrete\Controller\Panel\Detail\Page\Permissions::view'),
        '/ccm/system/panels/details/page/permissions/save_simple'                       => array('\Concrete\Controller\Panel\Detail\Page\Permissions::save_simple'),

        /**
         * RSS Feeds
         */
        '/rss/{identifier}'                                                             => array(
            '\Concrete\Controller\Feed::get',
            'rss',
            array('identifier' => '[A-Za-z0-9_/.]+')),

        /**
         * Special Dashboard
         */
        '/dashboard/blocks/stacks/list'                                                 => array(
            function () {
                return Redirect::to('/');
            }),
    ),

    /**
     * Route themes
     */
    'theme_paths'         => array(
        '/dashboard'        => 'dashboard',
        '/dashboard/*'      => 'dashboard',
        '/account'          => VIEW_CORE_THEME,
        '/account/*'        => VIEW_CORE_THEME,
        '/install'          => VIEW_CORE_THEME,
        '/login'            => VIEW_CORE_THEME,
        '/register'         => VIEW_CORE_THEME,
        '/maintenance_mode' => VIEW_CORE_THEME,
        '/upgrade'          => VIEW_CORE_THEME
    ),

    /**
     * File Types
     */
    'file_types'          => array(
        t('JPEG')           => array('jpg,jpeg,jpe', FileType::T_IMAGE, 'image', 'image', 'image'),
        t('GIF')            => array('gif', FileType::T_IMAGE, 'image', 'image', 'image'),
        t('PNG')            => array('png', FileType::T_IMAGE, 'image', 'image', 'image'),
        t('Windows Bitmap') => array('bmp', FileType::T_IMAGE, 'image'),
        t('TIFF')           => array('tif,tiff', FileType::T_IMAGE, 'image'),
        t('HTML')           => array('htm,html', FileType::T_IMAGE),
        t('Flash')          => array('swf', FileType::T_IMAGE, 'image'),
        t('Icon')           => array('ico', FileType::T_IMAGE),
        t('SVG')            => array('svg', FileType::T_IMAGE),
        t('Windows Video')  => array('asf,wmv', FileType::T_VIDEO, false, 'video'),
        t('Quicktime')      => array('mov,qt', FileType::T_VIDEO, false, 'video'),
        t('AVI')            => array('avi', FileType::T_VIDEO, false, 'video'),
        t('3GP')            => array('3gp', FileType::T_VIDEO, false, 'video'),
        t('Plain Text')     => array('txt', FileType::T_TEXT, false, 'text'),
        t('CSV')            => array('csv', FileType::T_TEXT, false, 'text'),
        t('XML')            => array('xml', FileType::T_TEXT),
        t('PHP')            => array('php', FileType::T_TEXT),
        t('MS Word')        => array('doc,docx', FileType::T_DOCUMENT),
        t('Stylesheet')     => array('css', FileType::T_TEXT),
        t('MP4')            => array('mp4', FileType::T_VIDEO),
        t('FLV')            => array('flv', FileType::T_VIDEO, 'flv'),
        t('MP3')            => array('mp3', FileType::T_AUDIO, false, 'audio'),
        t('MP4')            => array('m4a', FileType::T_AUDIO, false, 'audio'),
        t('Realaudio')      => array('ra,ram', FileType::T_AUDIO),
        t('Windows Audio')  => array('wma', FileType::T_AUDIO),
        t('Rich Text')      => array('rtf', FileType::T_DOCUMENT),
        t('JavaScript')     => array('js', FileType::T_TEXT),
        t('PDF')            => array('pdf', FileType::T_DOCUMENT),
        t('Photoshop')      => array('psd', FileType::T_IMAGE),
        t('MPEG')           => array('mpeg,mpg', FileType::T_VIDEO),
        t('MS Excel')       => array('xla,xls,xlsx,xlt,xlw', FileType::T_DOCUMENT),
        t('MS Powerpoint')  => array('pps,ppt,pptx,pot', FileType::T_DOCUMENT),
        t('TAR Archive')    => array('tar', FileType::T_APPLICATION),
        t('Zip Archive')    => array('zip', FileType::T_APPLICATION),
        t('GZip Archive')   => array('gz,gzip', FileType::T_APPLICATION),
        t('OGG')            => array('ogg', FileType::T_AUDIO),
        t('OGG Video')      => array('ogv', FileType::T_VIDEO),
        t('WebM')           => array('webm', FileType::T_VIDEO)
    ),

    /**
     * Importer Attributes
     */
    'importer_attributes' => array(
        'width'    => array('Width', 'NUMBER', false),
        'height'   => array('Height', 'NUMBER', false),
        'duration' => array('Duration', 'NUMBER', false)
    ),

    /**
     * Assets
     */
    'assets' => array(

        'jquery'    => array(
            array(
                'javascript',
                'js/jquery.js',
                array('position' => Asset::ASSET_POSITION_HEADER, 'minify' => false, 'combine' => false)
            )
        ),

        'jquery/ui' => array(
            array('javascript', 'js/jquery-ui.js', array('minify' => false, 'combine' => false)),
            array('css', 'css/jquery-ui.css', array('minify' => false))
        ),

        'underscore' => array(
            array('javascript', 'js/underscore.js', array('minify' => false))
        ),

        'dropzone' => array(
            array('javascript', 'js/dropzone.js')
        ),

        'jquery/form' => array(
            array('javascript', 'js/jquery-form.js')
        ),

        'picturefill' => array(
            array('javascript', 'js/picturefill.js', array('minify' => false))
        ),

        'jquery/rating' => array(
            array('javascript', 'js/jquery.rating.js'),
            array('css', 'css/jquery-rating.css')
        ),

        'spectrum' => array(
            array('javascript', 'js/spectrum.js', array('minify' => false)),
            array('css', 'css/spectrum.css', array('minify' => false))
        ),

        'font-awesome' => array(
            array('css', 'css/font-awesome.css', array('minify' => false))
        ),

        'core/style-customizer' => array(
            array('javascript', 'js/style-customizer.js', array('minify' => false)),
            array('css', 'css/style-customizer.css', array('minify' => false))
        ),

        'jquery/fileupload' => array(
            array('javascript', 'js/jquery-fileupload.js')
        ),

        'swfobject' => array(
            array('javascript', 'js/swfobject.js')
        ),

        'redactor' => array(
            array('javascript', 'js/redactor.js', array('minify' => false)),
            array('css', 'css/redactor.css')
        ),

        'redactor_locale' => array(
            array('javascript',
                REL_DIR_FILES_TOOLS_REQUIRED . '/i18n_redactor_js',
                array('combine' => false, 'minify' => false, 'local' => false)
            )
        ),

        'ace' => array(
            array('javascript', 'js/ace/ace.js', array('minify' => false))
        ),

        'backstretch' => array(
            array('javascript', 'js/backstretch.js')
        ),

        'dynatree' => array(
            array('javascript', 'js/dynatree.js', array('minify' => false)),
            array('css', 'css/dynatree.css', array('minify' => false))
        ),

        'dynatree_locale' => array(
            array(
                'javascript',
                REL_DIR_FILES_TOOLS_REQUIRED . '/i18n_dynatree_js',
                array('combine' => false, 'minify' => false, 'local' => false)
            )
        ),

        'bootstrap/dropdown' => array(
            array('javascript', 'js/bootstrap/dropdown.js'),
            array('css', 'css/app.css', array('minify' => false))
        ),

        'bootstrap/tooltip' => array(
            array('javascript', 'js/bootstrap/tooltip.js'),
            array('css', 'css/app.css', array('minify' => false))
        ),

        'bootstrap/popover' => array(
            array('javascript', 'js/bootstrap/popover.js'),
            array('css', 'css/app.css', array('minify' => false))
        ),

        'bootstrap/alert' => array(
            array('javascript', 'js/bootstrap/alert.js'),
            array('css', 'css/app.css', array('minify' => false))
        ),

        'bootstrap/button' => array(
            array('javascript', 'js/bootstrap/button.js'),
            array('css', 'css/app.css', array('minify' => false))
        ),

        'bootstrap/transition' => array(
            array('javascript', 'js/bootstrap/transition.js'),
            array('css', 'css/app.css', array('minify' => false))
        ),

        'bootstrap' => array(
            array('css', 'css/app.css', array('minify' => false))
        ),

        'core/app' => array(
            array('javascript', 'js/app.js', array('minify' => false, 'combine' => false)),
            array('css', 'css/app.css', array('minify' => false))
        ),

        'bootstrap-editable' => array(
            array('javascript', 'js/bootstrap-editable.js', array('minify' => false)),
        ),

        'core/app/editable-fields' => array(
            array('css', 'css/editable-fields.css', array('minify' => false))
        ),

        'kinetic' => array(
            array('javascript', 'js/kinetic.js')
        ),

        'core/imageeditor' => array(
            array('javascript', 'js/image-editor.js'),
            array('css', 'css/image-editor.css')
        ),

        'core/imageeditor_locale' => array(
            array(
                'javascript',
                REL_DIR_FILES_TOOLS_REQUIRED . '/i18n_imageeditor_js',
                array(
                    'combine' => false,
                    'minify' => false,
                    'local' => false
                )
            )
        ),

        'dashboard' => array(
            array('javascript', 'js/dashboard.js')
        ),

        'core/frontend/captcha' => array(
            array('css', 'css/frontend/captcha.css')
        ),

        'core/frontend/pagination' => array(
            array('css', 'css/frontend/pagination.css')
        ),

        'core/frontend/errors' => array(
            array('css', 'css/frontend/errors.css')
        ),

        'core/file-manager' => array(
            array('javascript', 'js/file-manager.js', array('minify' => false)),
            array('css', 'css/file-manager.css', array('minify' => false))
        ),

        'core/sitemap' => array(
            array('javascript', 'js/sitemap.js', array('minify' => false)),
            array('css', 'css/sitemap.css', array('minify' => false))
        ),

        'core/topics' => array(
            array('javascript', 'js/topics.js', array('minify' => false)),
            array('css', 'css/topics.css', array('minify' => false))
        ),

        'core/groups' => array(
            array('javascript', 'js/groups.js', array('minify' => false))
        ),

        'core/gathering' => array(
            array('javascript', 'js/gathering.js')
        ),

        'core/gathering/display' => array(
            array('css', 'css/gathering/display.css'),
        ),

        'core/gathering/base' => array(
            array('css', 'css/gathering/base.css'),
        ),

        'core/conversation' => array(
            array('javascript', 'js/conversations.js'),
            array('css', 'css/conversations.css')
        ),

        'core/lightbox' => array(
            array('javascript', 'js/jquery-magnific-popup.js'),
            array('css', 'css/jquery-magnific-popup.css')
        ),

        'core/lightbox/launcher' => array(
            array('javascript', 'js/lightbox.js')
        ),

        'core/account' => array(
            array('javascript', 'js/accounts.js'),
            array('css', 'css/account.css')
        )
    )
);
