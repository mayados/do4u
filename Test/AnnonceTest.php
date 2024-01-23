<?php

namespace Tests;
use App\Models\Annonce;
use DB;
use PDO;
use PDOStatement;
use PHPUnit\Framework\TestCase;

class AnnonceTest extends TestCase{

    // 
    public function testDeleteAnnonce()
    {
        $_POST["id"] = 1;

        $dbMock = $this->getMockBuilder(DB::class)
            ->disableOriginalConstructor()
            ->getMock();

        $stmtMock = $this->getMockBuilder(PDOStatement::class)
            ->getMock();

        $dbMock->expects($this->once())
            ->method('prepare')
            ->with('DELETE FROM annonce WHERE idAnnonce = :idAnnonce')
            ->willReturn($stmtMock);

        $stmtMock->expects($this->once())
            ->method('bindParam')
            ->with(':idAnnonce', 1, PDO::PARAM_INT);

        $stmtMock->expects($this->once())
            ->method('execute')
            ->willReturn(true);

        $dbMock = $this->getMockBuilder(DB::class)
            ->onlyMethods(['getDB'])
            ->getMock();

        $dbMock->method('getDB')
            ->willReturn($dbMock);

        Annonce::deleteAnnonce(1);

        $this->expectOutputString("Annonce supprimée avec succès");
    }
}

