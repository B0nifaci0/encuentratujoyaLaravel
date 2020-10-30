<?php
$config = array(
  // productsManager
  'productsManager/add' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'description',
      'label' => 'Descripcion',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'purity',
      'label' => 'Pureza',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'weight',
      'label' => 'Peso',
      'rules' => 'required|numeric'
    ),
    array(
      'field' => 'price',
      'label' => 'Precio',
      'rules' => 'required|numeric'
    ),
    array(
      'field' => 'nationality',
      'label' => 'Nacionalidad',
      'rules' => 'required'
    )
  ),

  'productsManager/edit' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'description',
      'label' => 'Descripcion',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'purity',
      'label' => 'Pureza',
      'rules' => 'required|integer'
    ),
    array(
      'field' => 'weight',
      'label' => 'Peso',
      'rules' => 'required|numeric'
    ),
    array(
      'field' => 'price',
      'label' => 'Precio',
      'rules' => 'required|numeric'
    ),
    array(
      'field' => 'nationality',
      'label' => 'Nacionalidad',
      'rules' => 'required'
    )
  ),

  // Shops
  'shops/add' => array(
    array(
      'field' => 'shop_name',
      'label' => 'Nombre de la tienda',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'web_site',
      'label' => 'Sitio web',
      'rules' => 'required|valid_url'
    ),
    array(
      'field' => 'description',
      'label' => 'Descripcion',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'phone_number',
      'label' => 'Numero telefonico',
      'rules' => 'required|integer'
    ),
    array(
      'field' => 'username',
      'label' => 'Nombre de usuario',
      'rules' => 'required|alpha_numeric|is_unique[users.username]'
    ),
    array(
      'field' => 'name',
      'label' => 'Nombre real de usuario',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'email',
      'label' => 'Correo electronico',
      'rules' => 'required|valid_email'
    ),
    array(
      'field' => 'password',
      'label' => 'Contraseña',
      'rules' => 'required|alpha_numeric|min_length[6]'
    ),
    array(
      'field' => 'password_confirm',
      'label' => 'Connfirmacion de la contraseña',
      'rules' => 'required|matches[password]'
    )
  ),

  'shops/edit' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre de la tienda',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'web_site',
      'label' => 'Sitio web',
      'rules' => 'required|valid_url'
    ),
    array(
      'field' => 'username',
      'label' => 'Nombre de usuario',
      'rules' => 'required|alpha_numeric'
    ),
    array(
      'field' => 'password',
      'label' => 'Contraseña',
      'rules' => 'alpha_numeric|min_length[6]'
    ),
    array(
      'field' => 'password_confirm',
      'label' => 'Connfirmacion de la contraseña',
      'rules' => 'matches[password]'
    )
  ),

  // Customers
  'customers/add' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'surnames',
      'label' => 'Apellidos',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'phone_number',
      'label' => 'Numero telefonico',
      'rules' => 'required|is_natural'
    )
  ),
  // Customers
  'customers/edit' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'surnames',
      'label' => 'Apellidos',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'phone_number',
      'label' => 'Numero telefonico',
      'rules' => 'required|is_natural'
    )
  ),

  // Promotions
  'promotions/add' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre',
      'rules' => 'required|alpha'
    ),
    array(
      'field' => 'terms',
      'label' =>  'Terms',
      'rules' => 'required|alpha_numeric_spaces'
    ),

    array(
      'field' => 'start_date',
      'label' => 'start_date',
      'rules' => 'required'
    ),
    array(
      'field' => 'expiration_date',
      'label' => 'expiration_date',
      'rules' => 'required'
    ),
    array(
      'field' => 'description',
      'label' =>  'description',
      'rules' => 'required|alpha_numeric_spaces'
    )
  ),

  // Promotions
  'promotions/edit' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'terms',
      'label' =>  'Terms',
      'rules' => 'required|alpha_numeric_spaces'
    ),

    array(
      'field' => 'start_date',
      'label' => 'start_date',
      'rules' => 'required'
    ),
    array(
      'field' => 'expiration_date',
      'label' => 'expiration_date',
      'rules' => 'required'
    ),
    array(
      'field' => 'terms',
      'label' =>  'description',
      'rules' => 'required|alpha_numeric_spaces'
    )
  ),

  // Usuarios
  'users/signin' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre',
      'rules' => "required|regex_match[/^[a-zAZ àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]*/]"
    ),
    array(
      'field' => 'email',
      'label' => 'Correo',
      'rules' => 'required|valid_email'
    ),
    array(
      'field' => 'password',
      'label' => 'Contraseña',
      'rules' => 'required|alpha_numeric|min_length[6]'
    ),
    array(
      'field' => 'password_confirmation',
      'label' => 'Connfirmacion de la contraseña',
      'rules' => 'required|matches[password]'
    )
  ),

  'users/change_password' => array(
    array(
      'field' => 'password',
      'label' => 'Contraseña',
      'rules' => 'required|alpha_numeric|min_length[6]'
    ),
    array(
      'field' => 'password_confirmation',
      'label' => 'Connfirmacion de la contraseña',
      'rules' => 'required|matches[password]'
    )
  ),

  // Sucursales
  'branches/add' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre de la sucursal',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'address',
      'label' => 'Dirección',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'phone_number',
      'label' => 'Numero telefonico',
      'rules' => 'required|integer'
    ),
    array(
      'field' => 'latitude',
      'label' => 'Latitud',
      'rules' => 'required'
    ),
    array(
      'field' => 'longitude',
      'label' => 'Longitud',
      'rules' => 'required'
    )
  ),

  // Sucursales
  'branches/edit' => array(
    array(
      'field' => 'name',
      'label' => 'Nombre de la sucursal',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'address',
      'label' => 'Dirección',
      'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
      'field' => 'phone_number',
      'label' => 'Numero telefonico',
      'rules' => 'required|integer'
    ),
    array(
      'field' => 'latitude',
      'label' => 'Latitud',
      'rules' => 'required'
    ),
    array(
      'field' => 'longitude',
      'label' => 'Longitud',
      'rules' => 'required'
    )
  ),

  //category
  'categories/add' => array(
    array(
      'field' => 'name',
      'lable' => 'Nombre',
      'rules' => 'required|alpha_numeric_spaces'
    )
  ),
  'categories/edit' => array(
    array(
      'field' => 'name',
      'lable' => 'Nombre',
      'rules' => 'required|alpha_numeric_spaces'
    )
  )
);
