<?php

namespace App\Main;

class TopMenu
{
    /**
     * List of top menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu',
                        ],
                        'title' => 'Overview 1'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-2',
                        'params' => [
                            'layout' => 'simple-menu',
                        ],
                        'title' => 'Overview 2'
                    ]
                ]
            ],
            'menu-layout' => [
                'icon' => 'box',
                'title' => 'Menu Layout',
                'sub_menu' => [
                    'side-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Side Menu'
                    ],
                    'simple-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Simple Menu'
                    ],
                    'top-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Top Menu'
                    ]
                ]
            ],
            'apps' => [
                'icon' => 'activity',
                'title' => 'Apps',
                'sub_menu' => [
                    'users' => [
                        'icon' => 'users',
                        'title' => 'Users',
                        'sub_menu' => [
                            'users-layout-1' => [
                                'icon' => '',
                                'route_name' => 'users-layout-1',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'users-layout-2' => [
                                'icon' => '',
                                'route_name' => 'users-layout-2',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 2'
                            ],
                            'users-layout-3' => [
                                'icon' => '',
                                'route_name' => 'users-layout-3',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'profile' => [
                        'icon' => 'trello',
                        'title' => 'Profile',
                        'sub_menu' => [
                            'profile-overview-1' => [
                                'icon' => '',
                                'route_name' => 'profile-overview-1',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Overview 1'
                            ],
                            'profile-overview-2' => [
                                'icon' => '',
                                'route_name' => 'profile-overview-2',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Overview 2'
                            ],
                            'profile-overview-3' => [
                                'icon' => '',
                                'route_name' => 'profile-overview-3',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Overview 3'
                            ]
                        ]
                    ],
                    'inbox' => [
                        'icon' => 'inbox',
                        'route_name' => 'inbox',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Inbox'
                    ],
                    'file-manager' => [
                        'icon' => 'folder',
                        'route_name' => 'file-manager',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'File Manager'
                    ],
                    'point-of-sale' => [
                        'icon' => 'credit-card',
                        'route_name' => 'point-of-sale',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Point of Sale'
                    ],
                    'chat' => [
                        'icon' => 'message-square',
                        'route_name' => 'chat',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Chat'
                    ],
                    'post' => [
                        'icon' => 'file-text',
                        'route_name' => 'post',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Post'
                    ],
                    'calendar' => [
                        'icon' => 'calendar',
                        'route_name' => 'calendar',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Calendar'
                    ],
                    'crud' => [
                        'icon' => 'edit',
                        'title' => 'Crud',
                        'sub_menu' => [
                            'crud-data-list' => [
                                'icon' => '',
                                'route_name' => 'crud-data-list',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Data List'
                            ],
                            'crud-form' => [
                                'icon' => '',
                                'route_name' => 'crud-form',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Form'
                            ]
                        ]
                    ]
                ]
            ],
            'pages' => [
                'icon' => 'layout',
                'title' => 'Pages',
                'sub_menu' => [
                    'wizards' => [
                        'icon' => '',
                        'title' => 'Wizards',
                        'sub_menu' => [
                            'wizard-layout-1' => [
                                'icon' => '',
                                'route_name' => 'wizard-layout-1',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'wizard-layout-2' => [
                                'icon' => '',
                                'route_name' => 'wizard-layout-2',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 2'
                            ],
                            'wizard-layout-3' => [
                                'icon' => '',
                                'route_name' => 'wizard-layout-3',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'blog' => [
                        'icon' => '',
                        'title' => 'Blog',
                        'sub_menu' => [
                            'blog-layout-1' => [
                                'icon' => '',
                                'route_name' => 'blog-layout-1',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'blog-layout-2' => [
                                'icon' => '',
                                'route_name' => 'blog-layout-2',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 2'
                            ],
                            'blog-layout-3' => [
                                'icon' => '',
                                'route_name' => 'blog-layout-3',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'pricing' => [
                        'icon' => '',
                        'title' => 'Pricing',
                        'sub_menu' => [
                            'pricing-layout-1' => [
                                'icon' => '',
                                'route_name' => 'pricing-layout-1',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'pricing-layout-2' => [
                                'icon' => '',
                                'route_name' => 'pricing-layout-2',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 2'
                            ]
                        ]
                    ],
                    'invoice' => [
                        'icon' => '',
                        'title' => 'Invoice',
                        'sub_menu' => [
                            'invoice-layout-1' => [
                                'icon' => '',
                                'route_name' => 'invoice-layout-1',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'invoice-layout-2' => [
                                'icon' => '',
                                'route_name' => 'invoice-layout-2',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 2'
                            ]
                        ]
                    ],
                    'faq' => [
                        'icon' => '',
                        'title' => 'FAQ',
                        'sub_menu' => [
                            'faq-layout-1' => [
                                'icon' => '',
                                'route_name' => 'faq-layout-1',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'faq-layout-2' => [
                                'icon' => '',
                                'route_name' => 'faq-layout-2',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 2'
                            ],
                            'faq-layout-3' => [
                                'icon' => '',
                                'route_name' => 'faq-layout-3',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'login' => [
                        'icon' => '',
                        'route_name' => 'login',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Login'
                    ],
                    'register' => [
                        'icon' => '',
                        'route_name' => 'register',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Register'
                    ],
                    'error-page' => [
                        'icon' => '',
                        'route_name' => 'error-page',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Error Page'
                    ],
                    'update-profile' => [
                        'icon' => '',
                        'route_name' => 'update-profile',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Update profile'
                    ],
                    'change-password' => [
                        'icon' => '',
                        'route_name' => 'change-password',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Change Password'
                    ]
                ]
            ],
            'components' => [
                'icon' => 'inbox',
                'title' => 'Components',
                'sub_menu' => [
                    'grid' => [
                        'icon' => '',
                        'title' => 'Grid',
                        'sub_menu' => [
                            'regular-table' => [
                                'icon' => '',
                                'route_name' => 'regular-table',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Regular Table'
                            ],
                            'tabulator' => [
                                'icon' => '',
                                'route_name' => 'tabulator',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Tabulator'
                            ]
                        ]
                    ],
                    'overlay' => [
                        'icon' => '',
                        'title' => 'Overlay',
                        'sub_menu' => [
                            'modal' => [
                                'icon' => '',
                                'route_name' => 'modal',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Modal'
                            ],
                            'slide-over' => [
                                'icon' => '',
                                'route_name' => 'slide-over',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Slide Over'
                            ],
                            'notification' => [
                                'icon' => '',
                                'route_name' => 'notification',
                                'params' => [
                                    'layout' => 'top-menu'
                                ],
                                'title' => 'Notification'
                            ],
                        ]
                    ],
                    'accordion' => [
                        'icon' => '',
                        'route_name' => 'accordion',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Accordion'
                    ],
                    'button' => [
                        'icon' => '',
                        'route_name' => 'button',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Button'
                    ],
                    'alert' => [
                        'icon' => '',
                        'route_name' => 'alert',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Alert'
                    ],
                    'progress-bar' => [
                        'icon' => '',
                        'route_name' => 'progress-bar',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Progress Bar'
                    ],
                    'tooltip' => [
                        'icon' => '',
                        'route_name' => 'tooltip',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Tooltip'
                    ],
                    'dropdown' => [
                        'icon' => '',
                        'route_name' => 'dropdown',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Dropdown'
                    ],
                    'typography' => [
                        'icon' => '',
                        'route_name' => 'typography',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Typography'
                    ],
                    'icon' => [
                        'icon' => '',
                        'route_name' => 'icon',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Icon'
                    ],
                    'loading-icon' => [
                        'icon' => '',
                        'route_name' => 'loading-icon',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Loading Icon'
                    ]
                ]
            ],
            'forms' => [
                'icon' => 'sidebar',
                'title' => 'Forms',
                'sub_menu' => [
                    'regular-form' => [
                        'icon' => '',
                        'route_name' => 'regular-form',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Regular Form'
                    ],
                    'datepicker' => [
                        'icon' => '',
                        'route_name' => 'datepicker',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Datepicker'
                    ],
                    'tail-select' => [
                        'icon' => '',
                        'route_name' => 'tail-select',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Tail Select'
                    ],
                    'file-upload' => [
                        'icon' => '',
                        'route_name' => 'file-upload',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'File Upload'
                    ],
                    'wysiwyg-editor' => [
                        'icon' => '',
                        'route_name' => 'wysiwyg-editor',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Wysiwyg Editor'
                    ],
                    'validation' => [
                        'icon' => '',
                        'route_name' => 'validation',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Validation'
                    ]
                ]
            ],
            'widgets' => [
                'icon' => 'hard-drive',
                'title' => 'Widgets',
                'sub_menu' => [
                    'chart' => [
                        'icon' => '',
                        'route_name' => 'chart',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Chart'
                    ],
                    'slider' => [
                        'icon' => '',
                        'route_name' => 'slider',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Slider'
                    ],
                    'image-zoom' => [
                        'icon' => '',
                        'route_name' => 'image-zoom',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Image Zoom'
                    ]
                ]
            ]
        ];
    }
}
