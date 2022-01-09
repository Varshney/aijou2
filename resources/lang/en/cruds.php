<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'locale'                   => 'Locale',
            'locale_helper'            => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'database' => [
        'title'          => 'Database',
        'title_singular' => 'Database',
    ],
    'game' => [
        'title'          => 'Games',
        'title_singular' => 'Game',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'name'                          => 'Name',
            'name_helper'                   => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
            'platform'                      => 'Platforms',
            'platform_helper'               => ' ',
            'eu_release_date'               => 'EU Release Date',
            'eu_release_date_helper'        => 'European release date',
            'na_release_date'               => 'NA Release Date',
            'na_release_date_helper'        => 'North American release date',
            'jpm_release_date'              => 'JPN Release Date',
            'jpm_release_date_helper'       => 'Japanese release date',
            'developer'                     => 'Developer(s)',
            'developer_helper'              => ' ',
            'publisher'                     => 'Publisher(s)',
            'publisher_helper'              => ' ',
            'kr_release_date'               => 'Kr Release Date',
            'kr_release_date_helper'        => 'Korean release date',
            'store_amazon'                  => 'Amazon',
            'store_amazon_helper'           => 'Amazon store link',
            'store_ea'                      => 'EA',
            'store_ea_helper'               => 'EA store liink',
            'store_epic_games_store'        => 'Epic Games Store',
            'store_epic_games_store_helper' => 'Epic Games Store link',
            'store_gog'                     => 'GOG',
            'store_gog_helper'              => 'GOG store link',
            'store_humble_bundle'           => 'Humble Bundle',
            'store_humble_bundle_helper'    => 'Humble Bundle store link',
            'store_microsoft'               => 'Store Microsoft',
            'store_microsoft_helper'        => 'Microsoft store link',
            'store_playstation'             => 'PlayStation',
            'store_playstation_helper'      => 'PlayStation store link',
            'store_steam'                   => 'Steam',
            'store_steam_helper'            => 'Steam store link',
            'store_ubisoft'                 => 'Ubisoft',
            'store_ubisoft_helper'          => 'Ubisoft store link',
            'store_nintendo_e_shop'         => 'Nintendo eShop',
            'store_nintendo_e_shop_helper'  => 'Nintendo eShop store link',
        ],
    ],
    'platform' => [
        'title'          => 'Platforms',
        'title_singular' => 'Platform',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'acronym'           => 'Acronym',
            'acronym_helper'    => 'Shorthand for the platform',
        ],
    ],
    'company' => [
        'title'          => 'Companies',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'url'               => 'Site address',
            'url_helper'        => ' ',
        ],
    ],
];
