const uploadFile = async () => {
    var myHeaders = new Headers();
    myHeaders.append("X-Requested-With", "XMLHttpRequest");
    myHeaders.append(
      "Authorization",
      // =======================================================================
      // TODO : Token Harus Berasal Dari HASIL LOGIN
      // =======================================================================
      "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZWFlYTA3MjZhMDYyY2I0YTU3OWY0NDk0Y2NjMjE0ZTRkODFmNzdmNTA5Y2UwZjlkZGQxOGQwNWYwNTQ2YzQ4ZjEwMDQxZmJiNDgzMmI2YjciLCJpYXQiOjE1NzczNjU4NjYsIm5iZiI6MTU3NzM2NTg2NiwiZXhwIjoxNjA4OTg4MjY2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.COxXU0EL1BSGgZ8VJjhKgjY_hum6gZD-w0brnDGoSDuebXEfIs83OBpvqbMXvFSyvROjsuM_DBPzaShz6STAV_ispAhih2lsJ486bHRhoacoK5R9PPhtXkEzI4C2Um6KZ6nwcRPsIOK2ikSygWzBoLL5MxGzC3ERXklCSFo23hdqRZVrn0qa93aAJyVahAx-dvOtERyZTkEhIbYLNdB48ieO6mDwPpt3OPwFGoHnHGXsLHslEKLYmBFCO699jYb_rBbv8XDw3LUVjPRh2tHv95xedbJ3-1xRPmMszNxDUS62wWTqZeG_oltcz1VMkELbA-vTS7VYfiY65URYhSEaPRgca6zYH8IFryXOyod3YJT7xE8g0RUMO9impPFZZqvh62MKT8SGG7dzPNKQRGr-FsDnA1Dddr6HSTC67Rbg-W6J75NP6lKbZ5cFeQnPxYp72XN2LtcCLrFW9gNtq5wmpLcxC_rm8mC6sQfTRHUnfCw7dZD3Kp4Cal_QzUglp63RDlO3SUcBorrPCJQQddl2SGy3w68_SlAdeyWeNLtfW9rlxFox2TmirCpnyJpnSqv0UYtKUUyXlRzdvZekSbejhMktADF1x3TLttTG2GEyPxpXwXsLgqVVrDp5lsImnSwL5fn_GSL3cDBKazQ0RVsOoplSeqyh9jfc1wKcAYQAd9A"
    );
    // =========================================================================
    // TODO: GANTI SEMUA ISI FIELD FORM DATA
    // =========================================================================
    var formdata = new FormData();
    formdata.append("nama_depan", "hanan tos");
    formdata.append("nama_belakang", "asyrawi tos");
    formdata.append("alamat", "bauraga");
    formdata.append("no_hp", "2312");
    formdata.append("rekening", "as");
    formdata.append("no_rekening", "asd");
    formdata.append("foto", files[0], files[0].name);

    var requestOptions = {
      method: "POST",
      headers: myHeaders,
      body: formdata,
      redirect: "follow"
    };

    try {
      let res = await fetch("/api/v1/owners", requestOptions)
      console.log(res)
      return res.text()
    } catch (error) {
      console.log(error)
    }
  };

export {uploadFile} ;
