$('select[name="origin_province"]').on("change", function () {
    let ProvinsiId = $(this).val();

    if (ProvinsiId) {
        jQuery.ajax({
            url: "/api/Provinsi" + ProvinsiId + "/Kota",
            type: "GET",
            dataType: "JSON",
            succes: function (data) {
                $('select[name="origin_city"]').empty();
                $.each(data, function (key, value) {
                    $('select[name="origin_city"]').append(
                        `<option value="${key}">${value}</option>`
                    );
                });
            },
        });
    } else {
        $('select[name="origin_city"]').empty();
    }
});
