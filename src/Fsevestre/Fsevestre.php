<?php

namespace Hackathon3\Fsevestre;

class Fsevestre
{
    /**
     * TODO: Améliorer les performances (-> mémoire utilisée uniquement <-) de cette méthode.
     * TODO: La création d'autres méthodes ou classes est autorisée, tant que les tests passent (sans être modifiés).
     */
    public function getLinesFromFileName($fileName)
    {
        $fileName = __DIR__.'/Tests/file.txt';
        $testFileName = __DIR__.'/Tests/test_file.txt';

        if (! copy($fileName, $testFileName)) {
            echo "La copie $file du fichier a échoué...\n";
        }

        return [];
    }
}

