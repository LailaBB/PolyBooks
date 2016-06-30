<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // index_admin_page
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'index_admin_page');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\AdminController::indexAction',  '_route' => 'index_admin_page',);
                }

                // login_admin
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\SecurityController::loginAction',  '_route' => 'login_admin',);
                }

                // check_admin
                if ($pathinfo === '/admin/check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\SecurityController::checkAction',  '_route' => 'check_admin',);
                }

                // logout_admin
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\SecurityController::logoutAction',  '_route' => 'logout_admin',);
                }

            }

            // get_documents
            if (rtrim($pathinfo, '/') === '/api/documents') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_documents;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'get_documents');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Api\\DocumentController::getDocumentsAction',  '_route' => 'get_documents',);
            }
            not_get_documents:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/document')) {
                    // admin_document_index
                    if (rtrim($pathinfo, '/') === '/admin/document') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_document_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_document_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DocumentController::indexAction',  '_route' => 'admin_document_index',);
                    }
                    not_admin_document_index:

                    // admin_document_logs
                    if ($pathinfo === '/admin/document/log') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_document_logs;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DocumentController::journalAction',  '_route' => 'admin_document_logs',);
                    }
                    not_admin_document_logs:

                    // admin_document_new
                    if ($pathinfo === '/admin/document/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_document_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DocumentController::newAction',  '_route' => 'admin_document_new',);
                    }
                    not_admin_document_new:

                    // admin_document_show
                    if (preg_match('#^/admin/document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_document_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_document_show')), array (  '_controller' => 'AppBundle\\Controller\\DocumentController::showAction',));
                    }
                    not_admin_document_show:

                    // admin_document_edit
                    if (preg_match('#^/admin/document/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_document_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_document_edit')), array (  '_controller' => 'AppBundle\\Controller\\DocumentController::editAction',));
                    }
                    not_admin_document_edit:

                    // admin_document_delete
                    if (0 === strpos($pathinfo, '/admin/document/delete') && preg_match('#^/admin/document/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_document_delete')), array (  '_controller' => 'AppBundle\\Controller\\DocumentController::deleteAction',));
                    }

                    // is_public
                    if (0 === strpos($pathinfo, '/admin/document/ispublic') && preg_match('#^/admin/document/ispublic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'is_public')), array (  '_controller' => 'AppBundle\\Controller\\DocumentController::enabledAction',));
                    }

                    // log_document
                    if (0 === strpos($pathinfo, '/admin/document/log') && preg_match('#^/admin/document/log/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_log_document;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'log_document')), array (  '_controller' => 'AppBundle\\Controller\\DocumentController::logDocumentAction',));
                    }
                    not_log_document:

                }

                if (0 === strpos($pathinfo, '/admin/module')) {
                    // admin_module_index
                    if (rtrim($pathinfo, '/') === '/admin/module') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_module_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_module_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ModuleController::indexAction',  '_route' => 'admin_module_index',);
                    }
                    not_admin_module_index:

                    // admin_module_new
                    if ($pathinfo === '/admin/module/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_module_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ModuleController::newAction',  '_route' => 'admin_module_new',);
                    }
                    not_admin_module_new:

                    // admin_module_show
                    if (preg_match('#^/admin/module/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_module_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_show')), array (  '_controller' => 'AppBundle\\Controller\\ModuleController::showAction',));
                    }
                    not_admin_module_show:

                    // admin_module_edit
                    if (preg_match('#^/admin/module/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_module_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_edit')), array (  '_controller' => 'AppBundle\\Controller\\ModuleController::editAction',));
                    }
                    not_admin_module_edit:

                    // admin_module_delete
                    if (0 === strpos($pathinfo, '/admin/module/delete') && preg_match('#^/admin/module/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_delete')), array (  '_controller' => 'AppBundle\\Controller\\ModuleController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/api/login')) {
                // api_login
                if ($pathinfo === '/api/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityAPIController::loginAction',  '_route' => 'api_login',);
                }

                // api_login_check
                if ($pathinfo === '/api/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_login_check;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityAPIController::checkAction',  '_route' => 'api_login_check',);
                }
                not_api_login_check:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_index
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_user_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user_index',);
                }
                not_admin_user_index:

                // admin_user_new
                if ($pathinfo === '/admin/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_user_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
                }
                not_admin_user_new:

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
                }
                not_admin_user_show:

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
                }
                not_admin_user_edit:

                // admin_user_delete
                if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
                }

                // user_enabled
                if (0 === strpos($pathinfo, '/admin/user/enabled') && preg_match('#^/admin/user/enabled/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_enabled')), array (  '_controller' => 'AppBundle\\Controller\\UserController::enabledAction',));
                }

            }

            // nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
            }
            not_nelmio_api_doc_index:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
