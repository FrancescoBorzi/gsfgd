-- dubbio: ma la chiave quale dev'essere? per ora ho messo 'mim'

-- Nota: i COMMENT indicano la posizione nella pipeline (fonte: genemap.Key)
DROP TABLE IF EXISTS omim;
CREATE TABLE omim (
	genesymbols TEXT NOT NULL COMMENT '6',
	mim VARCHAR(6) NOT NULL COMMENT '10',
	disorders TEXT COMMENT '14',
	disorderValue1 TEXT COMMENT '15',
	disorderValue2 TEXT COMMENT '16',
	reference TEXT COMMENT '18',
	PRIMARY KEY (mim)
);

-- Test IMPORT singola tupla:
-- PIPELINE ESEMPIO### 1.1|9|11|95|1pter-p36.13|CCV|P|Cataract, congenital, Volkmann type||115665|Fd|linked to Rh in Scottish family||Cataract, congenital, Volkmann type (2)| | || ###FINE ESEMPIO

-- utilizzo le variabili SQL per semplicità
SET @genesymbols:='CCV';
SET @mim:='115665';
SET @disorders:='Cataract, congenital, Volkmann type (2)';
SET @disorderValue1:='';
SET @disorderValue2:='';
SET @reference:='';

-- query ri-eseguibile
DELETE FROM omim WHERE mim = @mim;
INSERT INTO omim VALUES
(@genesymbols, @mim, @disorders, @disorderValue1, @disorderValue2, @reference);

-- test finale
SELECT * FROM omim WHERE mim = @mim;
