<?php


include("KontrakView.php");
include("presenter/ProsesPasien.php");

class TampilPasien implements KontrakView
{
    private $prosespasien;
    private $tpl;

    function __construct()
    {
        $this->prosespasien = new ProsesPasien();
    }

    function tampil()
    {
        $this->prosespasien->prosesDataPasien();
        $data = null;

        for ($i = 0; $i < $this->prosespasien->getSize(); $i++) {
            $no = $i + 1;
            $data .= "<tr>
                        <td>$no</td>
                        <td>{$this->prosespasien->getNik($i)}</td>
                        <td>{$this->prosespasien->getNama($i)}</td>
                        <td>{$this->prosespasien->getTempat($i)}</td>
                        <td>{$this->prosespasien->getTl($i)}</td>
                        <td>{$this->prosespasien->getGender($i)}</td>
                        <td>{$this->prosespasien->getEmail($i)}</td>
                        <td>{$this->prosespasien->getTelp($i)}</td>
                        <td>
                            <button class='btn btn-info btnEdit' data-id='{$this->prosespasien->getId($i)}'>Edit</button>
                            <button class='btn btn-danger btnHapus' data-id='{$this->prosespasien->getId($i)}'>Hapus</button>
                        </td>
                      </tr>";
        }

        $this->tpl = new Template("templates/skin.html");
        $this->tpl->replace("DATA_TABEL", $data);
        $this->tpl->write();
    }
}

