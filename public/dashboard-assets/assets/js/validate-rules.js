var stylesRules = {
  validators: {
    notEmpty: {
      message: 'El nombre del estilo  es requerido'
    },
    regexp: {
      regexp: /^[a-zA-Z0-9]+$/
      //message: "Nop"
    }
  }
}
var nameRules = {
  validators: {
    notEmpty: {
    message: 'El campo es obligatorio'
    },
    regexp: {
      regexp: /^[a-zA-Z0-9]+$/,
      message: "Ingresa letras y numeros"
    }
  }
}

var nameRules2  = {
  validators: {
    notEmpty: {
    message: 'El campo es obligatorio'
    },
    regexp: {
      regexp: /^[0-9]{1,2}[.]{0,1}[0-9]{0,2}[\s][a-zA-Z]{1,}$/,
      message: "Ingresa letras y numeros"
    }
  }
}

var markedRules  = {
  validators: {
    notEmpty: {
    message: 'El campo es obligatorio'
    },
    regexp: {
      regexp: /^[0-9]{1,2}[.]{0,1}[0-9]{0,2}[\s][0-9]{0,1}[/]{0,1}[0-9]{0,2}[\s]{0,1}[a-zA-Z]{1,}$/,
      message: "Ingresa letras y numeros"
    }
  }
}

var phoneRules = {
  validators: {
    notEmpty: {
      message: 'El campo es obligatorio'
    },
    stringLength: {
      min: 6,
      max: 12,
      message: "Ingresa un número telefónico de hasta 12 dígitos"
    },
    regexp: {
      regexp: /^[0-9]+$/,
      message: "Ingresa solo números"
    }
  }
}

var emailRule = {
  validators: {
    notEmpty: {
      message: 'El correo electronico es requerido, no se puede dejar vacio'
    },
    emailAddress: {
      message: 'El correo electronico no es valido'
    },
    regexp: {
      regexp: /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i
    }
  }
}

var decimalNumbersRules = {
    validators: {
      notEmpty: {
        message: 'El campo es obligatorio'
      },
      stringLength: {
        min: 1,
        max: 9,
        message: "Ingresa un número de hasta 9 dígitos"
      },
      regexp: {
        regexp: /^(\d|-)?(\d|,)*\.?\d*$/,
        message: "Ingresa números"
      }
    }
  }

  var codeColorRules = {
      validators: {
        notEmpty: {
          message: 'El campo es obligatorio'
        },
        stringLength: {
          min: 1,
          max: 11,
          message: "Ingresa un número de hasta 11 dígitos"
        },
        regexp: {
          regexp: /^[a-zA-Z0-9]+(\d|-)?(\d|,)*\.?\d*$/,
          message: "Ingresa números o letras"
        }
      }
    }

var textareaRule = {
  validators: {
    notEmpty: {
      message: 'El campo es obligatorio'
    },
    stringLength: {
      max: 500,
      message: 'El contenido no puede superar los 500 caracteres'
    }
  }
}

var piecesRules = {
  validators: {
    notEmpty: {
      //message: 'El numero es requerido'
    },
    stringLength: {
      min: 1,
      max: 6,
      message: "Ingresa un número entre 1 y 6 dígitos"
    },
    regexp: {
      regexp: /^[0-9]+$/,
      message: "Ingresa solo números"
    }
  }
}

var otherNameRules = {
  validators: {
    notEmpty: {
    message: "El campo es obligatorio"
    },
    regexp: {
      regexp: /^([A-ZÑÁÉÍÓÚáéíóú][a-záéíóú]{1,}[\s]{0,1})+$/,
      message: "Ingresa solo letras iniciando con mayuscula"
    }
 }
}

var sizeRules = {
  validators: {
    notEmpty: {
        message: "El campo es obligatorio"
    },
    regexp: {
      regexp: /^([1-6]{0,1}[A-Z\s]{1,3})+$/,
      message: "Ingresa solo letras para talla"
    }
  }
}

var requireRules = {
  validators: {
    notEmpty: {
        message: "El campo es obligatorio"
      },
      regexp: {
        regexp: /^([0-9\s]{1,20})$/,
        message: "Ingresa solo numeros a proporción"
  }
}
}

var decimalRules = {
  validators: {
    notEmpty: {
        message: "El campo es obligatorio"
      },
      regexp: {
        regexp: /[0-9]{1,2}[.]{0,1}[0-9]{0,1}$/,
        message: "Ingresa un numero"
      }
  }
}

var decimalRules = {
  validators: {
    notEmpty: {
        message: "El campo es obligatorio"
      },
      regexp: {
        regexp: /[0-9]{1,2}[.]{0,1}[0-9]{0,1}$/,
        message: "Ingresa un numero"
      }
  }
}

var locationRules = {
  validators: {
    notEmpty: {
        message: "El campo es obligatorio"
      },
      regexp: {
        regexp: /[0-9]{1,2}[A-Z]+$/,
        message: "Ingresa un numero y letramayuscula si es necesario"
      }
  }
}


var weightRules  = {
  validators: {
    notEmpty: {
    message: 'El campo es obligatorio'
    },
    regexp: {
      regexp: /^[0-9]{1,2}[.]{0,1}[0-9]{0,2}[\s][0-9]{0,1}[/]{0,1}[0-9]{0,2}[\s]{0,1}[\s][0-9]{0,3}[\s][a-zA-Z]{1,}$/,
      message: "Ingresa letras y numeros"
    }
  }
}

var textRules = {
  validators: {
    notEmpty: {
    message: 'El campo es obligatorio'
    },
    regexp: {
      regexp: /^[a-zA-Z0-9.:()  /s%áéíóúñ]+$/,
      message: "No ingrese caracteres especiales"
    }
  }
}

var textRulesNotSpaces = {
  validators: {
    notEmpty: {
    message: 'El campo es obligatorio'
    },
    regexp: {
      regexp: /^[-_\w\.]+$/i,
      message: "No ingrese caracteres especiales"
    }
  }
}

// Reglas de audit formats
var sizes2Rules = {
  validators: {
    notEmpty: {
    message: 'Medidas en mayusculas, separadas por guines'
    },
    regexp: {
      regexp: /^[a-zA-Z-]{1,}[/s][0-9]{0,3}[%]{1,}[/s][a-zA-Z]{1,}$/,
      message: "Ingresa letras y numeros"
    }
  }
}
