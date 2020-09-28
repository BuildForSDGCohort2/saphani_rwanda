$(document).ready(function() {

    $('.province').change(function() {
        var provinces = document.getElementById("province").value;
        var token = $('meta[name="csrf-token"]').attr('content');

        var opt = "";
        $.ajax({
            url: '/districts',
            type: 'POST',
            data: { provinces: provinces, _token: token },
            success: function(result) {
                if (result == "") {
                    opt = '  <option value="" class="default-opt">Choose Province</option>'
                    alert("empty");
                    $('#District').append(opt);
                } else {
                    for (var bazimya = 0; bazimya < result.length; bazimya++) {
                        opt += '<option value="' + result[bazimya].id + '" >' + result[bazimya].name + '</option>'

                    }
                    $('#District').append(opt);

                }
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }

        })
        $('#District').find('option').remove();
        opt = '  <option value="" class="default-opt">Choose District</option>'
    });
    // ende of first query province
    $('.District').change(function() {
        var District = document.getElementById("District").value;
        var token = $('meta[name="csrf-token"]').attr('content');
        var opt = "";
        $.ajax({
            url: '/Sector',
            type: 'POST',
            data: { _token: token, District: District },
            success: function(result) {
                if (result == "") {
                    opt = '<option value="" class="default-opt">Hitamo Province</option>'
                    alert("empty");
                    $('#Sectore').append(opt);
                } else {
                    for (var bazimya = 0; bazimya < result.length; bazimya++) {
                        opt += '<option value="' + result[bazimya].id + '" requide >' + result[bazimya].name + '</option>'

                    }
                    $('#Sectore').append(opt);
                }

            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }

        })
        $('#Sectore').find('option').remove();
        opt = '  <option value="" class="default-opt">Hitamo Sector</option>'
    });

    // ende of first query
    $('.Sectore').change(function() {
        var sector = document.getElementById("Sectore").value;
        var token = $('meta[name="csrf-token"]').attr('content');
        var opt = "";
        $.ajax({
            url: '/Cell',
            type: 'POST',
            data: { _token: token, sector: sector, },
            success: function(result) {

                if (result == "") {
                    opt = '<option value="" class="default-opt">Choose Province</option>'
                    $('#').append(opt);
                } else {
                    for (var values = 0; values < result.length; values++) {
                        opt += '<option value="' + result[values].id + '" >' + result[values].name + '</option>'
                    }
                    $('#Cell').append(opt);
                }
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        })
        $('#Cell').find('option').remove();
        opt = '  <option value="" class="default-opt">Hitamo Cell</option>'
    });
    // ende of first query province
    $('.Cell').change(function() {
        var Cell = document.getElementById("Cell").value;
        var token = $('meta[name="csrf-token"]').attr('content');
        var opt = "";
        $.ajax({
            url: '/village',
            type: 'POST',
            data: { _token: token, Cell: Cell },

            success: function(result) {

                if (result == "") {
                    $('#Village').append(opt);
                } else {
                    for (var bazimya = 0; bazimya < result.length; bazimya++) {
                        opt += '<option value="' + result[bazimya].id + '" requide >' + result[bazimya].name + '</option>'

                    }

                    $('#Village').append(opt);
                }

            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        })
        $('#Village').find('option').remove();
        opt = '  <option value="" class="default-opt">Hitamo Village</option>'
    });

    // ende of first query province
     $('.Village').change(function() {
        var village = document.getElementById("Village").value;
        
        var token = $('meta[name="csrf-token"]').attr('content');
        var opt = "";
        $.ajax({
            url: '/Itsinda',
            type: 'POST',
            data: { _token: token, village: village },

            success: function(result) {
      
                if (result == "") {
                    opt = '  <option value="" class="default-opt">Nta tsinda rihaba</option>'
                    $('#Ikibina').append(opt);
                } else {
                    for (var bazimya = 0; bazimya < result.length; bazimya++) {
                        
                        if (result[bazimya].Groups == "1") {
                            
                            opt += '<option value="' + result[bazimya].id + '" requide >' + result[bazimya].name + '</option>'
 
                        }else{

                        }
                       
                    }

                    $('#Ikibina').append(opt);
                }

            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        })
        $('#Ikibina').find('option').remove();
        opt = '  <option value="" class="default-opt">Hitamo Itsinda</option>'
    });


});