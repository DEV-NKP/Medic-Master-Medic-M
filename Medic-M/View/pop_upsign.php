<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medic-M</title>
  </head>
  <body>
    <!-- pop up layer-->

    <section
      width="50%"
      style="position: fixed; top: 40px; left: 15%; right: 15%"
    >
      <table
        border="0"
        width="100%"
        align="center"
        style="border-radius: 10px; background-color: #7fbff3"
      >
        <tr>
          <td
            width="50%"
            style="
              background-image: url(../View/image/signgif.gif);
              background-size: 100% 100%;
              border-radius: 10px;
            "
          ></td>

          <td width="50%">
            <table
              border="0"
              width="100%"
              align="center"
              style="border-radius: 10px; background-color: #7fbff3"
            >
              <tr>
                <td align="center" style="padding-left: 80px">
                  <br /><font
                    size="6"
                    face="Noto Serif Display"
                    ,
                    serif
                    style="color: #000000"
                    ><b> Sign Up </b></font
                  >
                  <br />
                  <hr align="center" width="60%" color="#0eb165" />
                </td>

                <td width="5%" valign="top">
                  <a href="../View/index.html"
                    ><img
                      src="../View/image/exit.gif"
                      alt=""
                      style="width: 70px; height: 50px"
                  /></a>
                </td>
              </tr>

              <tr>
                <td colspan="2" style="text-align: center">
                  <br /><br />

                  <form action="../Controller/homeprocess.php" method="post">
                    <input
                      type="submit"
                      name="signC"
                      value="Sign Up as a Customer"
                      style="
                        padding-top: 8px;
                        padding-bottom: 8px;
                        padding-left: 15px;
                        padding-right: 15px;
                        background-color: #469483;
                        text-align: center;
                        border-radius: 20px;
                        border: 0px;
                        font-size: 20px;
                      "
                    />
                  </form>
                </td>
              </tr>

              <tr>
                <td
                  colspan="2"
                  style="text-align: center"
                >
                  <br /><br />
                  <form action="../Controller/homeprocess.php" method="post">
                    <input
                      type="submit"
                      name="signS"
                      value="Sign Up as a Seller"
                      style="
                        padding-top: 8px;
                        padding-bottom: 8px;
                        padding-left: 15px;
                        padding-right: 15px;
                        background-color: #469483;
                        text-align: center;
                        border-radius: 20px;
                        border: 0px;
                        font-size: 20px;
                      "
                    />
                  </form>
                </td>
              </tr>

              <tr>
                <td colspan="2" style="text-align: center">
                  <br /><br />
                  <form action="../Controller/homeprocess.php" method="post">
                    <input
                      type="submit"
                      name="signCA"
                      value="Sign Up as a Customer Associate"
                      style="
                        padding-top: 8px;
                        padding-bottom: 8px;
                        padding-left: 15px;
                        padding-right: 15px;
                        background-color: #469483;
                        text-align: center;
                        border-radius: 20px;
                        border: 0px;
                        font-size: 20px;
                      "
                    />
                  </form>
                </td>
              </tr>

              <tr>
                <td colspan="2" style="text-align: center">
                  <br /><br />
                  <form action="../Controller/homeprocess.php" method="post">
                    <input
                      type="submit"
                      name="signA"
                      value="Sign Up as a Admin"
                      style="
                        padding-top: 8px;
                        padding-bottom: 8px;
                        padding-left: 15px;
                        padding-right: 15px;
                        background-color: #469483;
                        text-align: center;
                        border-radius: 20px;
                        border: 0px;
                        font-size: 20px;
                      "
                    />
                  </form>

                  <br /><br /><br />
                </td>
              </tr>
              <tr>
                <td colspan="2"  style="text-align: center;">
        
         <form action="../Controller/homeprocess.php"  method="post">
          <font style="font-size: 18px;">Already have an account?</font>
           <input type="submit" value="Log In" name="logInMenu" style="padding-top:10px ; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 10px; border-width: 0; background-color: #dfc1c3; font-size: 18px;"><br><br><br>
          </form>
                  </td></tr>

            </table>
          </td>
        </tr>
      </table>
    </section>
    <!-- pop up layer-->
  </body>
</html>
